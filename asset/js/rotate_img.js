/*
Copyright 2023 Clément PAGÈS

==========

D'après un travail d'Arnaud Durand https://www.mathix.org/macamdoc/

Licence  CC BY-NC-SA 4.0 FR https://creativecommons.org/licenses/by-nc-sa/4.0/deed.fr
*/

const Root = document.documentElement, gRoot    = getComputedStyle(Root)

var RotateDeg = parseInt(gRoot.getPropertyValue('--turn'))

function rotate90() {
  RotateDeg = (RotateDeg+90) % 360
  Root.style.setProperty('--turn', RotateDeg + "deg")
}
