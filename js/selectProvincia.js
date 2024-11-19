const params = new URLSearchParams(window.location.search);
const provincia = params.get("provincia");
const element = document.querySelector(`[data-id="${provincia}"]`);
element.style.width = '640px';
