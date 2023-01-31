/**
 * Scroll class
 */

import { throttle } from '../libs/utils/throttle';

export default class Scroll {

  constructor() {
    this.disabled = false
    this.scrollYSaved = window.scrollY || window.pageYOffset

    this.main = {
      element: document.querySelector('#main'),
    }

    this.footer = {
      element: document.querySelector('#footer'),
    }

    this.addSmoothScroll()
    this.addPageTop()
  }

  /**
   * Disable
   */
  disable() {
    if (this.disabled) return

    // save scroll amount
    this.scrollYSaved = window.scrollY || window.pageYOffset

    // current size
    this.main.height = this.main.element.offsetHeight

    // fix main
    this.main.element.style.position = 'fixed'
    this.main.element.style.top = (0 - this.scrollYSaved) + 'px'

    // fix footer
    this.footer.element.style.position = 'fixed'
    this.footer.element.style.top = (this.main.height - this.scrollYSaved) + 'px'

    // change state
    this.disabled = true
  }

  /**
   * Enable
   */
  enable() {
    if (!this.disabled) return

    // unfix main
    this.main.element.style.position = ''
    this.main.element.style.top = ''

    // unfix footer
    this.footer.element.style.position = ''
    this.footer.element.style.top = ''

    // restore scroll amount
    window.scrollTo(0, this.scrollYSaved)

    // change state
    this.disabled = false
  }

  /**
   * Add smooth scroll
   */
  addSmoothScroll() {
    const triggers = document.querySelectorAll('a[href^="#"]')

    triggers.forEach(trigger => {
      trigger.addEventListener('click', (e) => {
        e.preventDefault()

        if (window.drawer && window.drawer.shown) window.drawer.hide()

        let href = trigger.getAttribute('href')
        let targetElement = document.querySelector(href)

        const top = targetElement.getBoundingClientRect().top
        const scrolled = window.scrollY || window.pageYOffset
        const target = top + scrolled

        window.scrollTo({
          top: target,
          behavior: 'smooth',
        })
      })
    })
  }

  /**
   * Add page top button
   */
  addPageTop() {
    const trigger = document.getElementById('pageTop')

    if (!trigger) return

    trigger.addEventListener('click', (e) => {
      e.preventDefault()
      window.scrollTo({
        top: 0,
        behavior: 'smooth',
      })
    })

    // control visibility
    // MEMO: addPageTop()コール時にパラメータで設定有無を指定できると良さげ
    const observeVisibility = () => {
      const scrollY = window.scrollY || window.pageYOffset
      if (scrollY > 500) {
        trigger.classList.add('-shown')
      } else {
        trigger.classList.remove('-shown')
      }
    }
    window.addEventListener('scroll', throttle(observeVisibility, 200))
  }
}
