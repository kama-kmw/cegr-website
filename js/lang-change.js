let button = document.querySelectorAll('.js-change-lang');
let elemRu = document.querySelectorAll('.lang-ru');
let elemEn = document.querySelectorAll('.lang-en');

for(let i=0; i<button.length; i++) {
    button[i].addEventListener("click", langChange, false);
}
function langChange() {
    if(this.classList.contains("rus")) {
        for(let i=0; i<elemRu.length; i++) {
            elemRu[i].style.display = 'none';
            elemEn[i].style.display = 'block';
        }
        this.classList.add("eng");
        this.classList.remove("rus");
    } else if(this.classList.contains("eng")) {
        for(let i=0; i<elemRu.length; i++) {
            elemRu[i].style.display = 'block';
            elemEn[i].style.display = 'none';
        }
        this.classList.add("rus");
        this.classList.remove("eng");
    }
}
