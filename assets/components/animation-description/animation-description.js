import './animation-description.scss';

let anims = document.getElementsByClassName('animation-description');

for (let anim of anims) {

    let words = anim.innerHTML.split(' ');
    let wordsView = words.map(function (word, index) {
        let p = document.createElement('p');
        for (let letter of word) {
            let span = document.createElement('span');
            span.innerHTML = letter;
            p.appendChild(span);
        }

        if (index !== words.length - 1) {
            let span = document.createElement('span');
            span.innerHTML = '&nbsp;';
            p.appendChild(span);
        }

        let wrapper = document.createElement('div');
        wrapper.appendChild(p);
        return wrapper.innerHTML;
    });

    anim.innerHTML = wordsView.join('');
}