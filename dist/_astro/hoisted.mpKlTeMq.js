const t=document.getElementById("btn-open"),n=document.getElementById("btn-close"),e=document.getElementById("nav-items");t?.addEventListener("click",()=>{e?.classList.add("nav-items--side","active")});n?.addEventListener("click",()=>{e?.classList.remove("active")});
