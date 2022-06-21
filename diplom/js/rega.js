const form = document.getElementByld('form')
const formData = new FormData(form)

form.addEventListener('submit', e =>{
  e.preventDefault()

  fetch(form.action,{
    maethod: "POST",
    body: formData
  })
  .then(res => res.text())

  .then(data => {

  })
})
