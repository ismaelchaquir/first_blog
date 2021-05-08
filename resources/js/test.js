import { createPopper } from '@popperjs/core';
  


const button = document.querySelector('#button');
// const tooltip = document.querySelector('#tooltip');
console.log(button);
// Pass the button, the tooltip, and some options, and Popper will do the
// magic positioning for you:
createPopper(button, {
  placement: 'right',
});