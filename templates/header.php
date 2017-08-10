<header class="mainnav">
    <section class="wrapper">
        <div id="getgoing">

              <table id="countdown" width="100%">
                <tbody>
                  <tr class="stats">
                    <td class="days"></td>
                    <td class="hours"></td>
                    <td class="minutes"></td>
                    <td class="seconds"></td>
                  </tr>

                  <tr class="labels">
                    <td>Days</td>
                    <td>Hours</td>
                    <td>Min</td>
                    <td>Sec</td>
                  </tr>
                </tbody>
              </table>

              <script>
              //Start Clock
              function getTimeRemaining(endtime) {
                var t = Date.parse(endtime) - Date.parse(new Date());
                var seconds = Math.floor((t / 1000) % 60);
                var minutes = Math.floor((t / 1000 / 60) % 60);
                var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                var days = Math.floor(t / (1000 * 60 * 60 * 24));
                return {
                  'total': t,
                  'days': days,
                  'hours': hours,
                  'minutes': minutes,
                  'seconds': seconds
                };
              }

              function initializeClock(id, endtime) {
                var clock = document.getElementById(id);
                var daysSpan = clock.querySelector('.days');
                var hoursSpan = clock.querySelector('.hours');
                var minutesSpan = clock.querySelector('.minutes');
                var secondsSpan = clock.querySelector('.seconds');

                function updateClock() {
                  var t = getTimeRemaining(endtime);

                  daysSpan.innerHTML = t.days;
                  hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                  minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                  secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                  if (t.total <= 0) {
                    clearInterval(timeinterval);
                  }
                }

                updateClock();
                var timeinterval = setInterval(updateClock, 1000);
              }

              var deadline = 'October 14 2017 12:00:00 GMT+0600';
              initializeClock('countdown', deadline);
              </script>

            <div id="register">
                <a href="">Register</a>
            </div>
        </div>

        <div id="logo">
            <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="http://10.10.20.117/wordpress/wp-content/uploads/2017/06/ZombieLogo.png"/></a>
        </div>

        <nav>
            <div id="topnav">
                 <?php
                      if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(['theme_location' => 'primary_navigation']);
                      endif;
                ?>
            </div>

            <div id="mainnav">
                <div id="race">
                    <a href="">THE RACE</a>
                </div>
                <div id="schedule">
                    <a href="">SCHEDULE</a>
                </div>
            </div>

        </nav>
    </section>
</header>
