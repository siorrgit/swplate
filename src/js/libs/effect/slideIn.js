const elements = document.querySelectorAll('.-effect-slideIn')

elements.forEach(element => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('-shown')
      }
    })
  }, {
    rootMargin: '0px 0px -15%'
  })
  observer.observe(element)
})
