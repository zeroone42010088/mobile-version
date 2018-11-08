'use strict';

(() => {
  const selector = 'ol[type="буквы"]',
    style = document.createElement('style');
  document.head.appendChild(style);
  [].forEach.call(' абвгдежзиклмнопрстуфхцчшщэюя', (c, i) =>
    style.sheet.insertRule(`${selector}>li:nth-child(${i+1})::before{content:"${c})"}`, 0)
  );
  style.sheet.insertRule(`${selector}>li{list-style-type:none;position:relative}`, 0);
  style.sheet.insertRule(`${selector}>li::before{position:absolute;width:2em;left:-2.25em;text-align:right;display:inline-block}`, 0);
})();