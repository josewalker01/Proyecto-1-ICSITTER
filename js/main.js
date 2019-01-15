





function init() {  
    main.classList.add("loading");
    setTimeout(function() { main.classList.remove("loading"); }, 1800); 
    console.log("hola");
  }
  window.onload = function() {
    document.body.addEventListener('click', () => init());
      init();
  };