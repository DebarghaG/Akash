<?php
$homepage = true;
include("header.php"); ?>

  <section id="home-intro">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-6 cell large-order-1 intro-text">
          <div class="wrap">
            <h2 class="type-title-small">We aim to help administer the use of drones in India.</h2>
          </div>
        </div>
        <div class="large-6 cell large-order-2  illustrations">
          <img src="img/giphy.gif" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="register-drone">
    <div class="wrap">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="large-8 cell">
            <h2>Register a <br>drone today</h2>
            <p>Get a license to become a pilot, operator or manufacturer with us. Before you can apply, you need to be registered. Get started with the link below.</p>
          </div>
          <div class="large-3 large-offset-1 cell">
            <div class="btn-wrap">
              <a href="register.php" class="button">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="help-me-apply">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-5 cell">
          <h2>Help me apply</h2>
        </div>
        <div class="large-7 cell">
          <p class="question">My drone is
            <select class="drone_weight" name="">
              <option disabled selected value="">Select</option>
              <option value="over">over</option>
              <option value="under">under</option>
            </select>
            250 grams.
            <span class="other-parts"> I am a
            <select class="license_type" name="">
              <option disabled selected value="">Select</option>
              <option value="pilot">pilot</option>
              <option value="operator">operator</option>
              <option value="manufacturer">manufacturer</option>
            </select>
            </span>

            <span class="and-parts">and

            <select class="acquisition_type" name="">
              <option disabled selected value="">Select</option>
              <option value="in-india">I’m purchasing a drone in India</option>
              <option value="import">I’m importing a drone</option>
            </select>

            <select class="pilot_type" name="">
              <option disabled selected value="">Select</option>
              <option value="micro">I’m flying a micro drone</option>
              <option value="above-micro">I’m flying a small or above drone</option>
            </select>

            <select class="manufacture_type" name="">
              <option disabled selected value="">Select</option>
              <option value="in-india">I’m building a drone in India</option>
              <option value="import">I’m importing a drone </option>
            </select>
          </span>
          </p>
          <div class="answer">
            <p class="under"><strong>Answer:</strong> Nano drones are currently exempt from registration, import licenses as well as NPNT compliance. You can fly your drone up to 50 ft and in enclosed premises, today! Please do not forget to read our <a href="http://dgca.gov.in/cars/RPAS-Do's%20and%20Don'ts.pdf" target="_blank">Do’s and Don’ts</a></p>
            <p class="over"></p>

            <span class="pilot">
              <p><strong>Answer:</strong> As the pilot of a drone, you must be well-versed with the CAR and the Do’s and Don’ts to understand what is required of you. You are primarily responsible for safe flight operations and please be aware of people, structures and entities in your flight plan that you could affect. Please register yourself, to get a Pilot ID that will be required for permission to fly in NPNT complaint drones.</p>
              <p class="micro">Do follow guidelines as per section 12 of the CAR, and avoid areas as per Section 13 of the CAR. </p>
              <p class="above-micro">You are also required to get remote pilot training as per Section 9 of the CAR from an approved FTO.</p>
            </span>
            <span class="operator">
                <p><strong>Answer:</strong> As an owner of a drone, you must be well-versed with the CAR and the Do’s and Don’ts to understand what is required of you. Unless exempted by section 7.2 of the CAR, you will need a UAOP. Refer to Section 7 of the CAR for documentation required.</p>
                <p class="in-india">Please ensure that the drone you are purchasing is an NPNT compliant drone. You will only be able to generate UINs for NPNT Compliant drone.</p>
                <p class="import">For imports, a clearance from DGFT is also required along with NPNT compliance. If the drone is not a registered type in Digital Sky, you will also need to register as a manufacturer.</p>
            </span>
            <span class="manufacturer">
              <p><strong>Answer:</strong> As a manufacturer, you must be well-versed with the CAR & RPAS Guidance Manual to understand compliance requirements before selling your drone. You will need an IT Act-compliant digital certificate to register yourself.</p>
              <p class="import">DGFT clearance is needed for importing drones.</p>
              <p class="in-india">Any make of drone you manufacture, assemble or import will need to be NPNT compliant. Digital copies of appropriate compliance certificates are needed to add your make of drone. Once approved, your customers who are registered operators of your make of drone, will be able to generate UINs.</p>
            </span>
            <a href="register.php" class="button button-light-clean">Register</a>
          </div>

          <!-- <p>After creation of your profile, please pay the fees on Bharat Kosh. Upload the payment receipt and necessary documentation. Your approval will take up to 7 days to process.</p> -->

        </div>
      </div>
    </div>
  </section>

  <div class="clearfix"></div>

  <section id="press-releases">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h2>Press Releases</h2>
        </div>

        <div class="large-6 cell">
          <div class="article">
            <a href="#"><h4>New drone policy launched in India</h4></a>
            <div class="date">10 January 2018</div>
          </div>

          <div class="article">
            <a href="#"><h4>New drone policy launched in India</h4></a>
            <div class="date">10 January 2018</div>
          </div>

          <div class="article">
            <a href="#"><h4>New drone policy launched in India</h4></a>
            <div class="date">10 January 2018</div>
          </div>

          <a href="#" class="button">Read More</a>
        </div>

        <div class="large-6 cell show-for-large">
          <div class="article">
            <a href="#"><h4>New drone policy launched in India</h4></a>
            <div class="date">10 January 2018</div>
          </div>

          <div class="article">
            <a href="#"><h4>New drone policy launched in India</h4></a>
            <div class="date">10 January 2018</div>
          </div>

          <div class="article">
            <a href="#"><h4>New drone policy launched in India</h4></a>
            <div class="date">10 January 2018</div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <section id="faq">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h2>FAQ</h2>

          <ul class="accordion" data-accordion data-allow-all-closed="true">
            <li class="accordion-item is-active" data-accordion-item>
              <a href="#" class="accordion-title">Frequently asked question 1</a>
              <div class="accordion-content" data-tab-content>
                <p>Panel 1. Lorem ipsum dolor</p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">Frequently asked question 2</a>
              <div class="accordion-content" data-tab-content>
                <p>Panel 2. Lorem ipsum dolor</p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">Lorem ipsum dolor sit amet</a>
              <div class="accordion-content" data-tab-content>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="clearfix"></div>


<?php include("footer.php");
