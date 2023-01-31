/**
 * Drawer class
 */

export default class Drawer {

  constructor(args) {
    this.scroll = args.scroll
    this.$drawer = document.getElementById('drawer')
    this.$toggle = document.getElementById('drawer-toggle')

    if (!this.$drawer || !this.$toggle) return

    // create base
    this.$base = document.createElement('div')
    this.$base.classList.add('drawer-base')
    this.$drawer.parentNode.insertBefore(this.$base, this.$drawer)
    this.$base.addEventListener('click', () => this.hide())

    // init
    this.shown = false
    this.$drawer.classList.remove('-shown')
    this.$base.classList.remove('-shown')

    // show/hide
    this.$toggle.addEventListener('click', () => {
      if (this.shown) this.hide()
      else this.show()
    })
  }

  /**
   * Show
   */
  show() {
    // show drawer
    this.$drawer.classList.add('-shown')

    // show base
    this.$base.classList.add('-shown')

    // transform toggle
    this.$toggle.classList.add('-drawer-shown');
    this.$toggle.classList.remove('-drawer-hidden');

    // disable scroll
    this.scroll.disable()

    // change state
    this.shown = true
  }

  /**
   * Hide
   */
  hide() {
    // hide drawer
    this.$drawer.classList.remove('-shown')

    // hide base
    this.$base.classList.remove('-shown')

    // transform toggle
    this.$toggle.classList.add('-drawer-hidden');
    this.$toggle.classList.remove('-drawer-shown');

    // enable scroll
    this.scroll.enable()

    // change state
    this.shown = false
  }
}
