<footer class="bg-navy text-inverse">
  <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
    <div class="d-lg-flex flex-row align-items-lg-center">
      <h3 class="display-4 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white">
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
          <p class="mb-4">
            © Mojha. All rights reserved.
          </p>
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
            Unit No – 0302, Corporate Park, Tower A/1 Sector -142 Noida, Uttar Pradesh
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
          <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
          <div class="newsletter-wrapper">
            <!-- Begin Mailchimp Signup Form -->
            <div id="mc_embed_signup2">
              <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll2">
                  <div class="mc-field-group input-group form-floating">
                    <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                    <label for="mce-EMAIL2">Email Address</label>
                    <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
                  </div>
                  <div id="mce-responses2" class="clear">
                    <div class="response" id="mce-error-response2" style="display:none"></div>
                    <div class="response" id="mce-success-response2" style="display:none"></div>
                  </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
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
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script>
  let childCount = 2;
  function addDirectories() {
    let parent = document.getElementById("directories-container");
    let div = document.createElement("div");
    let div1 = document.createElement("div");
    let removeBtn = document.createElement("button");
    let input = document.createElement("input");
    div.classList.add("form-floating", "position-relative");
    input.setAttribute("type", "text");
    input.setAttribute("id", `restricted-directories-${childCount}`);
    input.setAttribute("name", `restricted-directories-${childCount}`);
    input.classList.add("form-control");
    removeBtn.classList.add("btn-icon", "text-danger");
    removeBtn.innerHTML = "<i class='bi bi-dash-circle-fill'></i>";
    div1.classList.add(
      "position-absolute",
      "top-50",
      "start-100",
      "translate-middle"
    );
    div1.appendChild(removeBtn);
    div.appendChild(input);
    div.appendChild(div1);
    parent.appendChild(div);
    childCount++;
    removeBtn.addEventListener("click", (e) => {
      let item = removeBtn.parentNode.parentNode;
      parent.removeChild(item);
      updateId();
    });

    function updateId() {
      let list = parent.children;
      let count = 1;
      for (const child of list) {
        child.children[0].setAttribute("id", `restricted-directories-${count}`);
        count++;
      }
    }
  }
</script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



<script>
  var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike', 'link','blockquote', 'code-block'],
    [{ 'header': [1, 2, 3, 4, 5, 6, false] },{ 'font': [] }],
    [{ 'list': 'ordered'}, { 'list': 'bullet' },{ 'script': 'sub'}, { 'script': 'super' },{ 'indent': '-1'}, { 'indent': '+1' },{ 'align': [] }],
    [{ 'direction': 'rtl' }, 'clean'],
    [{ 'color': [] }, { 'background': [] }], 
    [{ 'image': '' },{ 'video': '' }] ];
var options = {
  debug: 'info',
  modules: {
    toolbar: toolbarOptions
  },
  placeholder: 'Write Blog content here...',
  theme: 'snow'
};


  var quill = new Quill('#blogContent', options);
</script>

  </body>
</html>