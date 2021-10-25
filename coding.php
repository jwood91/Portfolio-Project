<?php $pageTitle = "Joseph Wood Portfolio | Coding";
include "inc/header.php"?>
            <main>

             <div id="hero-image">
               <div id='mobile-nav'>
                 <a href="index.html" id='initial-link'><h1>JW</h1></a>
                 <div id=dropdown-button>
                   <span class= "hamburger-box">
                                <span class="hb-span"></span>
                              </span>
                </div>
              </div>
                <div id="coding-container" class="main-container">
                  <div id="coding-text" class="main-text">
                    <h2>Example 1 - SASS</h2>
                     <p>
                      @mixin mq($break) {<br>
                         &nbsp;&nbsp;$value: map-get($breakpoints, $break);<br>
                         &nbsp;&nbsp;$sm: map-get($breakpoints, 'sm');<br>

                         &nbsp;&nbsp;@if $value == null {<br>
                         &nbsp;&nbsp;&nbsp;&nbsp;@warn '"#{$break}" is not a valid breakpoint name'<br>
                         &nbsp;&nbsp;}<br>
                         &nbsp;&nbsp;@else if $value < $sm {<br>
                             &nbsp;&nbsp;&nbsp;&nbsp;@media (max-width: $value) {<br>
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @content;<br>
                             &nbsp;&nbsp;}<br>
                             &nbsp;}<br>
                        &nbsp;&nbsp;@else {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;@media (min-width: $value) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@content;<br>
                        &nbsp;&nbsp;}<br>
                        &nbsp;}<br>
                       }<br>
                     </p>
                     <div class='example-desc'>
                       <h3>Explanation</h3>
                       <p>
                         I used the above mixin within my SASS to define the breakpoints within my Netmatters project.  I also used the same code to build this website so that both would have set points where I could make changes to build a responsive web design.
                       </p>
                       <h4> Breakdown:</h4>
                       <p>
                         The media query checks against my breakpoint variable which I have set widths for xs,sm,md and lg in the variables section of my projects. I can include this mixin into all of my SASS elements media querys where additional styling at the different breakpoints is required. Saving time on writing out individual media query sizes each time.
                       </p>
                     </div>
                  </div>
                </div>
                <div id="coding-container" class="main-container">
                  <div id="coding-text" class="main-text">
                    <h2>Example 2 - Javascript</h2>
                     <p>
                       const cookieStorage = {<br>
                       &nbsp;&nbsp;getItem: (item) => {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;const cookies = document.cookie<br>
                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;.split(';') <br>
                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;.map(cookie => cookie.split('='))<br>
                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;.reduce((acc, [key, value]) => ({<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...acc, [key.trim()]: value }), {});<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;return cookies[item];<br>
                        &nbsp;&nbsp; },<br>
                        &nbsp;&nbsp;setItem: (item, value) => {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;document.cookie = `${item}=${value};`<br>
                        &nbsp;&nbsp;}
                      }<br>

                      const storageType = cookieStorage;<br>
                      const consentPropertyName = 'netmatters_consent';<br>
                      const shouldShowPopup = () => !storageType.getItem(consentPropertyName);<br>
                      const saveToStorage = () => storageType.setItem(consentPropertyName, true);<br>
                      <br>
                      window.onload = () => {<br>

                      &nbsp;&nbsp;const acceptFn = event => {<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;saveToStorage(storageType);<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;overlaySeen.classList.remove('show-overlay');<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;consentPopup.classList.add('hidden');<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;scroll.classList.remove('scroll-freeze')<br>
                      &nbsp;&nbsp;}<br>
                      &nbsp;&nbsp;const consentPopup = document.getElementById('consent-popup');<br>
                      &nbsp;&nbsp;const acceptBtn = document.getElementById('cookie-accept');<br>
                      &nbsp;&nbsp;const overlaySeen = document.getElementById('overlay');<br>
                      &nbsp;&nbsp;const scroll = document.getElementById('scroll');<br>
                      &nbsp;&nbsp;acceptBtn.addEventListener('click', acceptFn);<br>
                      <br>
                      &nbsp;&nbsp;if (shouldShowPopup(storageType)) {<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;setTimeout(() => {<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overlaySeen.classList.add('show-overlay');<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overlaySeen.classList.add('cookie-overlay');<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;scroll.classList.add('scroll-freeze');<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;consentPopup.classList.remove('hidden');<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;}, 200);<br>
                        &nbsp;&nbsp;}<br>
                      };


                     </p>
                     <div class='example-desc'>
                       <h3>Explanation</h3>
                       <p>
                        This is Javascript I used to create a cookie popup for my netmatters homepage project to make a popup that appears upon page load that will ask for the user to accept cookies and save the cookies.
                       </p>
                       <h4>Breakdown:</h4>
                       <p>
                         The JS here creates a cookie to be saved upon clicking accept.  If the page is reloaded the cookie will be saved and then the popup will not be generated another time.  The code adds classes to the popup to make it show as well as a non-scrollable overlay that will vanish upon accepting cookies.
                       </p>
                     </div>
                  </div>
                </div>
                <div id="coding-container" class="main-container">
                  <div id="coding-text" class="main-text">
                    <h2>Example 3 - SQL Databases</h2>
                    <img id="database-image" src="images/movie-database.png" alt="database example">
                     <p>
                      SELECT&nbsp;&nbsp;actor.act_fname AS "Actor First Name",<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;actor.act_lname AS "Actor Last Name",<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;actor.act_gender AS "Actor Gender",<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movie.mov_id AS "Movie ID",<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movie.mov_title AS "Movie Title",<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movie.mov_year AS "Movie Year",<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movie.mov_dt_rel AS "Release Date",<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movie.mov_rel_country AS "Release Country"<br>
                      <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;FROM&nbsp;&nbsp;((movie_cast<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INNER JOIN movie ON movie_cast.mov_id =<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movie.mov_id)<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INNER JOIN actor ON movie_cast.act_id =<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;actor.act_id)<br>
                      <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WHERE&nbsp;&nbsp;actor.act_id IN (SELECT actor.act_id FROM actor WHERE actor.act_gender LIKE 'F')<br>
                     </p>
                     <img id="results-image" src="images/SQL-results.png" alt="database example">
                     <div class='example-desc'>
                       <h3>Explanation</h3>
                       <p>
                        I used a movie database to create a query to find the films which starred female actors using joins to generate the columns I wanted to see. The top image is of the database and the bottom shows the results this query generates.
                       </p>
                       <h4> Breakdown:</h4>
                       <p>
                        The above query generates columns from the tables in actor and in movie and inner joins them on the movie_cast table where the three tables have associated columns.  The table shows two columns from the actor table and four from the movie table together to show a table with the information I was looking for.
                       </p>
                     </div>
                  </div>
                </div>
              </div>
          </main>
      <?php include "inc/footer.php" ?>
