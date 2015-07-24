<footer>
  <h5>Made with &hearts; &mdash; Travis Favaron &amp; Ashley Thornburg</h5>
</footer>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script charset="utf-8" src="assets/js/application.js" async></script>
<script charset="utf-8" src="assets/js/validator.js" async></script>
<script>

var mainHeader = document.getElementById('main-header');
  var body = document.body;
  var mainHeader_startHeight,
      startTouchY,
      touchY,
      prevTouchY,
      touchDirection,
      touch;

  mainHeader.addEventListener('click', function(e){
    if (touch || window.innerWidth <= 480)
    {
      e.preventDefault();
    }

    if (this.className.search('is-expanded') == -1)
    {
      this.className += ' is-expanded';
    }
    else
    {
      this.className = this.className.replace(' is-expanded', '');
    }
  });

  [].forEach.call(document.querySelectorAll('.mobile-nav ul a'), function(link) {
    link.addEventListener('touchstart', function(e) {
      e.stopPropagation();
      e.preventDefault();

      window.location.href = link.href;
    });
  });

  var window_touchmoved = function(e) {
    e.preventDefault();

    touchY = e.changedTouches[0].clientY;
    mainHeader.style.height =
      mainHeader_startHeight + (touchY - startTouchY) + 'px';

    touchDirection = touchY > prevTouchY ? 1 : -1;

    prevTouchY = touchY;
  };

  mainHeader.addEventListener('touchstart', function(e) {
    e.preventDefault();
    touch = true;

    mainHeader_startHeight = this.offsetHeight;
    startTouchY =
      prevTouchY = e.changedTouches[0].clientY;

    this.className += ' is-touching';
    window.addEventListener('touchmove', window_touchmoved, false);
  }, false);

  mainHeader.addEventListener('touchend', function(e) {
    window.removeEventListener('touchmove', window_touchmoved);

    this.style.height = '';
    this.className = this.className.replace(' is-touching', '');

    if (touchDirection == -1)
    {
      this.className = this.className.replace(' is-expanded', '');
    }
    else if (this.className.search('is-expanded') == -1)
    {
      this.className += ' is-expanded';
    }
  }, false);
</script>
</body>
</html>
