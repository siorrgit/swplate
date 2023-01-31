import Swiper, { Autoplay, EffectFade, Navigation, Pagination } from 'swiper'
import 'swiper/css'
import 'swiper/css/effect-fade'

/** MV Slide */
const mvSlide = new Swiper('#mv-slide', {
  modules: [ Autoplay, EffectFade ],
  loop: true,
  speed: 2000,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  effect: 'fade',
})

const thumbnails = document.querySelectorAll('#mv-thumbnail > li')

thumbnails.forEach((thumbnail, i) => {
  thumbnail.addEventListener('click', () => {
    mvSlide.slideTo(i + 1)
  })
})

mvSlide.on('slideChange', () => {
  thumbnails.forEach((thumbnail, i) => {
    thumbnail.classList.remove('-active')
  })
  const index = mvSlide.realIndex + 1
  const activeThumbnail = document.querySelector(`#mv-thumbnail > li:nth-child(${index})`)
  activeThumbnail.classList.add('-active')
})

/** Policy Slide */
const policySlide = new Swiper('#policy-slide', {
  modules: [ Navigation, Pagination ],
  slidesPerView: 1.43,
  centeredSlides: true,
  initialSlide: 2,
  speed: 500,
  navigation: {
    prevEl: '.policy-slide-prev',
    nextEl: '.policy-slide-next',
  },
  breakpoints: {
    0: {
      spaceBetween: 18,
    },
    768: {
      spaceBetween: 44,
    },
    1280: {
      spaceBetween: 73,
    },
  }
})

const videos = document.querySelectorAll('#policy-slide video')

const stopAllVideos = () => {
  videos.forEach(video => {
    video.pause()
    video.removeAttribute('controls')
  })
}

const playVideo = () => {
  const activeSlide = policySlide.slides[policySlide.activeIndex]
  const video = activeSlide.querySelector('video')
  video.controls = true
  video.play()
}

// playVideo()
policySlide.on('slideChange', () => {
  stopAllVideos()
  playVideo()
})
