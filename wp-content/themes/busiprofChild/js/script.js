console.log('bonjour');

const selectSVG = document.querySelectorAll('svg rect, svg circle, svg line');
console.log(selectSVG);
for(selectS of selectSVG){
    selectS.addEventListener('mouseover',function(e){
        this.classList.toggle('gold')

    })

}