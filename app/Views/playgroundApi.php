<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website."
    />
    <meta
      name="keywords"
      content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template"
    />
    <meta name="author" content="elemis" />
    <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
    <link rel="shortcut icon" href="/assets/img/favicon.png" />
    <link rel="stylesheet" href="/assets/css/plugins.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/colors/purple.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="/assets/css/new.css" />
    <link
      rel="preload"
      href="/assets/css/fonts/thicccboi.css"
      as="style"
      onload="this.rel='stylesheet'"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      href="https://cdn.quilljs.com/1.3.6/quill.snow.css"
      rel="stylesheet"
    />
    <style>
      .main-grid {
        display: grid;
      }
      @media (min-width: 650px) {
        .main-grid {
          grid-template-columns: 1fr 1fr;
          gap: 1rem;
        }
      }
    </style>
  </head>

  <body class="">
    <div class="">
      <header class="" style="padding-bottom: 17px">
        <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light">
          <div class="w-100 mx-2">
            <div
              class="navbar-collapse-wrapper mt-2 bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center"
            >
              <div class="navbar-brand w-100">
                <a href="/">
                  <img
                    src="/assets/img/logo.png"
                    srcset="/assets/img/logo@2x.png 2x"
                    alt=""
                  />
                </a>
              </div>
              <div
                class="navbar-collapse offcanvas offcanvas-nav offcanvas-start"
              >
                <div class="offcanvas-header d-lg-none">
                  <a href="/"
                    ><img
                      src="/assets/img/logo-light.png"
                      srcset="/assets/img/logo-light@2x.png 2x"
                      alt=""
                  /></a>
                  <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="/free-tools">Free tools</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/blog">Blog</a>
                    </li>
                  </ul>
                  <!-- /.navbar-nav -->
                  <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                    <a href="mailto:first.last@email.com" class="link-inverse"
                      >info@email.com</a
                    >
                    <br />
                    00 (123) 456 78 90 <br />
                    <nav class="nav social social-white mt-4">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                      <a href="#"><i class="uil uil-instagram"></i></a>
                      <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!-- /offcanvas-nav-other -->
                </div>
                <!-- /.offcanvas-body -->
              </div>
              <!-- /.navbar-collapse -->
              <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <li class="nav-item d-block d-md-block">
                    <a
                      href="/signin"
                      class="btn btn-sm btn-primary rounded-pill"
                      >Sign In</a
                    >
                  </li>
                  <li class="nav-item d-lg-none">
                    <button class="hamburger offcanvas-nav-btn">
                      <span></span>
                    </button>
                  </li>
                </ul>
                <!-- /.navbar-nav -->
              </div>
              <!-- /.navbar-other -->
            </div>
            <!-- /.navbar-collapse-wrapper -->
          </div>
          <!-- /.container -->
        </nav>
        <!-- /.navbar -->
        <!--/.modal -->
        <!-- /.offcanvas -->
      </header>

      <section class="mx-auto main-grid container" style="gap: 1rem">
        <div class="">
          <div>
            <h1>Online REST & SOAP API Testing Tool</h1>
          </div>
          <div class="d-flex" style="gap: 0.5rem">
            <div class="form-floating flex-grow-1">
              <input
                id="textInputExample"
                type="text"
                class="form-control"
                placeholder="https://google.com"
              />
              <label for="textInputExample">https://google.com</label>
            </div>
            <div class="form-select-wrapper">
              <select class="form-select" aria-label="Default select example">
                <option value="GET" selected>GET</option>
                <option value="POST">POST</option>
                <option value="PUT">PUT</option>
                <option value="PATCH">PATCH</option>
                <option value="DELETE">DELETE</option>
                <option value="HEAD">HEAD</option>
                <option value="OPTIONS">OPTIONS</option>
              </select>
            </div>
            <button class="btn btn-primary">Send</button>
          </div>

          <ul class="nav nav-tabs nav-tabs-basic mt-5">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1"
                >Authorization</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab3-2"
                >Content</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab3-3"
                >Headers</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab3-4">Raw</a>
            </li>
          </ul>
          <!-- /.nav-tabs -->
          <div class="tab-content mt-0 mt-md-5 mb-5">
            <div class="tab-pane fade show active" id="tab3-1">
              <div class="d-flex mb-5">
                <ul
                  class="nav nav-tabs nav-tabs-basic d-flex flex-column col-3"
                >
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      data-bs-toggle="tab"
                      href="#tab4-1"
                      >Bearer Token</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab4-2"
                      >Basic Auth</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab4-3"
                      >Custom</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab4-4"
                      >No Auth</a
                    >
                  </li>
                </ul>
                <div
                  class=""
                  style="
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: 1fr;
                  "
                >
                  <div
                    class="tab-pane fade show active card p-3"
                    id="tab4-1"
                    style="grid-row: 1/ 2; grid-column: 1/2"
                  >
                    <div class="form-floating mb-3">
                      <input
                        id="textInputExample"
                        type="text"
                        class="form-control"
                        placeholder="Token"
                      />
                      <label for="textInputExample">Token</label>
                    </div>
                    <!-- /.form-floating -->
                    <p style="font-size: 14px">
                      The authorizationheaderwill be automatically generated
                      when you send the request. Read more about HTTP
                      Authentication.
                    </p>
                  </div>
                  <div
                    class="tab-pane fade card p-3"
                    id="tab4-2"
                    style="grid-row: 1/ 2; grid-column: 1/2"
                  >
                    <div class="form-floating mb-3">
                      <input
                        id="textInputExample"
                        type="text"
                        class="form-control"
                        placeholder="Token"
                      />
                      <label for="textInputExample">Basic Auth</label>
                    </div>
                    <!-- /.form-floating -->
                    <p style="font-size: 14px">
                      The authorizationheaderwill be automatically generated
                      when you send the request. Read more about HTTP
                      Authentication.
                    </p>
                  </div>
                  <div
                    class="tab-pane fade card p-3"
                    id="tab4-3"
                    style="grid-row: 1/ 2; grid-column: 1/2"
                  >
                    <div class="form-floating mb-3">
                      <input
                        id="textInputExample"
                        type="text"
                        class="form-control"
                        placeholder="Token"
                      />
                      <label for="textInputExample">Custom</label>
                    </div>
                    <!-- /.form-floating -->
                    <p style="font-size: 14px">
                      The authorizationheaderwill be automatically generated
                      when you send the request. Read more about HTTP
                      Authentication.
                    </p>
                  </div>
                  <div
                    class="tab-pane fade card p-3"
                    id="tab4-4"
                    style="grid-row: 1/ 2; grid-column: 1/2"
                  >
                    <div class="form-floating mb-3">
                      <input
                        id="textInputExample"
                        type="text"
                        class="form-control"
                        placeholder="Token"
                      />
                      <label for="textInputExample">No Auth</label>
                    </div>
                    <!-- /.form-floating -->
                    <p style="font-size: 14px">
                      The authorizationheaderwill be automatically generated
                      when you send the request. Read more about HTTP
                      Authentication.
                    </p>
                  </div>
                </div>
              </div>
              <div class="d-flex mb-2" style="gap: 1rem">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                    checked
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    Bearer Token
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1"
                    >Basic Auth</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1"
                    >Custom</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1"
                    >No Auth</label
                  >
                </div>
              </div>
              <div class="card p-3">
                <div class="form-floating">
                  <input
                    id="textInputExample"
                    type="text"
                    class="form-control"
                    placeholder="Token"
                  />
                  <label for="textInputExample">Token</label>
                </div>
                <!-- /.form-floating -->
                <p style="font-size: 14px">
                  The authorizationheaderwill be automatically generated when
                  you send the request. Read more about HTTP Authentication.
                </p>
              </div>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab3-2">
              <div class="form-select-wrapper mb-4">
                <select class="form-select" aria-label="Default select example">
                  <option value="URLENCODED">
                    FORM URL Encoded (application/x-www-form-urlencoded)
                  </option>
                  <option value="JSON" selected>JSON (application/json)</option>
                  <option value="HTML">HTML (text/html)</option>
                  <option value="XML">XML (application/xml)</option>
                  <option value="TEXT">TEXT (text/plain)</option>
                  <option value="CUSTOM">CUSTOM</option>
                </select>
              </div>
              <div class="form-floating mb-4">
                <textarea
                  id="textareaExample"
                  class="form-control"
                  placeholder="Textarea"
                  style="height: 150px"
                  required
                ></textarea>
                <label for="textareaExample">{"key": "value"}</label>
              </div>
              <!-- /.form-floating -->
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab3-3">
              <label for="textareaExample"
                >Cache-Control: no-cache, no-store, must-revalidate
                <br />Pragma: no-cache<br />
                Expires: 0</label
              >
              <div class="form-floating mb-4">
                <textarea
                  id="textareaExample"
                  class="form-control"
                  placeholder="Cache-Control: no-cache, no-store, must-revalidate Pragma: no-cache  Expires: 0"
                  style="height: 150px"
                  required
                ></textarea>
              </div>
              <!-- /.form-floating -->
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab3-4">
              <div class="form-floating mb-4">
                <textarea
                  id="textareaExample"
                  class="form-control"
                  placeholder="Textarea"
                  style="height: 150px"
                  required
                ></textarea>
                <label for="textareaExample"
                  >Please enter a valid URL to see request details.</label
                >
              </div>
              <!-- /.form-floating -->
            </div>
            <!--/.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <div class="d-flex flex-column">
          <div class="d-flex" style="gap: 1rem">
            <h3 class="mb-0 h5">
              Status: <span> 200 </span> (<span>OK</span>)
            </h3>
            <h3 class="mb-0 h5">Time: <span> 996 ms </span></h3>
            <h3 class="mb-0 h5">Size: <span> 142.02 kb </span></h3>
          </div>
          <ul class="nav nav-tabs nav-tabs-basic mt-5">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#tab5-1"
                >Content (<span>297</span>)</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab5-2"
                >Headers (<span>9</span>)</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab5-3"
                >Raw (<span>11</span>)</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab5-4">HTML</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab5-5">Timing</a>
            </li>
          </ul>

          <div class="tab-content mt-0 mt-md-5 mb-5 flex-grow-1">
            <div class="tab-pane fade h-100 show active" id="tab5-1">
              <div class="form-floating mb-4">
                <textarea
                  id="textareaExample"
                  class="form-control"
                  placeholder="Textarea"
                  style="height: 150px"
                  required
                >
page source details</textarea
                >
                <label for="textareaExample"
                  >Please enter a valid URL to see request details.</label
                >
              </div>
              <!-- /.form-floating -->
            </div>
            <div class="tab-pane fade h-100" id="tab5-2">
              <div class="form-floating mb-4">
                <textarea
                  id="textareaExample"
                  class="form-control"
                  placeholder="Textarea"
                  style="height: 150px"
                  required
                >
header details</textarea
                >
                <label for="textareaExample"
                  >Please enter a valid URL to see request details.</label
                >
              </div>
              <!-- /.form-floating -->
            </div>
            <div class="tab-pane fade h-100" id="tab5-3">
              <div class="form-floating mb-4">
                <textarea
                  id="textareaExample"
                  class="form-control"
                  placeholder="Textarea"
                  style="height: 150px"
                  required
                >
raw details</textarea
                >
                <label for="textareaExample"
                  >Please enter a valid URL to see request details.</label
                >
              </div>
              <!-- /.form-floating -->
            </div>
            <div class="tab-pane fade h-100" id="tab5-4">
              <iframe
                src="https://interviewmania.com"
                class="w-100 h-100"
                frameborder="0"
              ></iframe>
            </div>
            <div class="tab-pane fade h-100" id="tab5-5">
              <iframe
                src="https://interviewmania.com"
                class="w-100 h-100"
                frameborder="0"
              ></iframe>
            </div>
          </div>
        </div>
      </section>

      <footer class="bg-navy text-inverse">
        <div class="pt-15 pt-md-17 pb-13 pb-md-15 mx-2">
          <div class="d-lg-flex flex-row align-items-lg-center">
            <h3
              class="display-4 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white"
            >
              Join our community by using our services and grow your business.
            </h3>
            <a href="#" class="btn btn-primary rounded-pill mb-0 text-nowrap"
              >Try It For Free</a
            >
          </div>
          <!--/div -->
          <hr class="mt-11 mb-12" />
          <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
              <div class="widget">
                <img
                  class="mb-4"
                  src="https://sandbox.elemisthemes.com/assets/img/logo-light.png"
                  srcset="
                    https://sandbox.elemisthemes.com/assets/img/logo-light@2x.png 2x
                  "
                  alt=""
                />
                <p class="mb-4">© Mojha. All rights reserved.</p>
                <nav class="nav social social-white">
                  <a href="#"><i class="uil uil-twitter"></i></a>
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
                  <a href="#"><i class="uil uil-instagram"></i></a>
                  <a href="#"><i class="uil uil-youtube"></i></a>
                </nav>
                <!-- /.social -->
              </div>
              <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
              <div class="widget">
                <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                <address class="">
                  Unit No – 0302, Corporate Park, Tower A/1 Sector -142 Noida,
                  Uttar Pradesh
                </address>
                <a href="mailto:contact@mojha.com">contact@mojha.com</a><br />
                <a href="tel:+91-82879-04046">+91 82879 04046</a>
              </div>
              <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
              <div class="widget">
                <h4 class="widget-title text-white mb-3">Other Links</h4>
                <ul class="list-unstyled mb-0">
                  <li><a href="/about-us">About Us</a></li>
                  <li><a href="/contact-us">Contact Us</a></li>
                  <li><a href="/privacy-policy">Privacy Policy</a></li>
                </ul>
              </div>
              <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3 pb-0">
              <div class="widget">
                <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                <p class="mb-5">
                  Subscribe to our newsletter to get our news & deals delivered
                  to you.
                </p>
                <div class="newsletter-wrapper">
                  <!-- Begin Mailchimp Signup Form -->
                  <div id="mc_embed_signup2">
                    <form
                      action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                      method="post"
                      id="mc-embedded-subscribe-form2"
                      name="mc-embedded-subscribe-form"
                      class="validate dark-fields"
                      target="_blank"
                      novalidate
                    >
                      <div id="mc_embed_signup_scroll2">
                        <div class="mc-field-group input-group form-floating">
                          <input
                            type="email"
                            value=""
                            name="EMAIL"
                            class="required email form-control"
                            placeholder="Email Address"
                            id="mce-EMAIL2"
                          />
                          <label for="mce-EMAIL2">Email Address</label>
                          <input
                            type="submit"
                            value="Join"
                            name="subscribe"
                            id="mc-embedded-subscribe2"
                            class="btn btn-primary"
                          />
                        </div>
                        <div id="mce-responses2" class="clear">
                          <div
                            class="response"
                            id="mce-error-response2"
                            style="display: none"
                          ></div>
                          <div
                            class="response"
                            id="mce-success-response2"
                            style="display: none"
                          ></div>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div
                          style="position: absolute; left: -5000px"
                          aria-hidden="true"
                        >
                          <input
                            type="text"
                            name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc"
                            tabindex="-1"
                            value=""
                          />
                        </div>
                        <div class="clear"></div>
                      </div>
                    </form>
                  </div>
                  <!--End mc_embed_signup-->
                </div>
                <!-- /.newsletter-wrapper -->
              </div>
              <!-- /.widget -->
            </div>
            <!-- /column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
      </footer>
      <div class="progress-wrap">
        <svg
          class="progress-circle svg-content"
          width="100%"
          height="100%"
          viewBox="-1 -1 102 102"
        >
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
      </div>
    </div>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/theme.js"></script>
  </body>
</html>
