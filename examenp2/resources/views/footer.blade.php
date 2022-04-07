      <!-- Footer -->
      <div class="footerStyle">
        <div id="footer">
          <div class="container">
            <div class="row">
              <section class="col-3 col-6-narrower col-12-mobilep">
                <h3>Links to Stuff</h3>
                <ul class="links">
                  <li><a href="{{route('bosses')}}">Bosses</a></li>
                  <li><a href="{{route('donors')}}">Donors</a></li>
                </ul>
              </section>
              <section class="col-6 col-12-narrower">
                <h3>Get In Touch</h3>
                <form>
                  <div class="row gtr-50">
                    <div class="col-6 col-12-mobilep">
                      <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Name"
                      />
                    </div>
                    <div class="col-6 col-12-mobilep">
                      <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Email"
                      />
                    </div>
                    <div class="col-12">
                      <textarea
                        name="message"
                        id="message"
                        placeholder="Message"
                        rows="5"
                      ></textarea>
                    </div>
                    <div class="col-12">
                      <ul class="actions">
                        <li>
                          <input
                            type="submit"
                            class="button alt"
                            value="Send Message"
                          />
                        </li>
                      </ul>
                    </div>
                  </div>
                </form>
              </section>
            </div>
          </div>

          <!-- Icons -->
          <ul class="icons">
            <li>
              <a href="#" class="icon brands fa-twitter"
                ><span class="label">Twitter</span></a
              >
            </li>
            <li>
              <a href="#" class="icon brands fa-facebook-f"
                ><span class="label">Facebook</span></a
              >
            </li>
          </ul>

          <!-- Copyright -->
          <div class="copyright">
            <ul class="menu">
              <li>&copy;All rights reserved to FromSoftware ©</li>
              <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/browser.min.js"></script>
    <script src="js/breakpoints.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>
  </body>