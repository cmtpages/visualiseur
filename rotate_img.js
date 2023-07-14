const Root     = document.documentElement
    , gRoot    = getComputedStyle(Root)

var RotateDeg = parseInt(gRoot.getPropertyValue('--turn'))

function rotate90()
  {
  RotateDeg = (RotateDeg+90) % 360
  Root.style.setProperty('--turn', RotateDeg + "deg")
  }
