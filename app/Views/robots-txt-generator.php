<section class="container bg-gradient-primary">
  <div class="container py-5 py-md-10 card mb-5">
    <div class="row text-center">
      <div
        class="col-lg-9 col-xxl-7 mx-auto"
        data-cues="zoomIn"
        data-group="welcome"
        data-interval="-200"
      >
        <h2 class="display-1">Free Robots.txt Generator</h2>
        <p class="lead lh-sm px-md-5 px-xl-7 mb-5">
          Fill form below and generate robots.txt
        </p>
      </div>
    </div>
    <div class="d-flex flex-column" style="gap: 0.5rem">
      <div class="robot-txt-layout px-lg-3">
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="all-robots"
            name="all-robots"
            aria-label="all-robots"
          >
            <option value="*">Default - Robots Allowed</option>
            <option value="/">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="crawl-delay"
            name="crawl-delay"
            aria-label="crawl-delay"
          >
            <option value="">Defalut - Crawl-Delay - No Delay</option>
            <option value="5">5 seconds</option>
            <option value="10">10 seconds</option>
            <option value="20">20 seconds</option>
            <option value="60">60 seconds</option>
            <option value="120">120 seconds</option>
          </select>
        </div>
        <div class="form-floating">
          <input
            id="sitemap"
            type="text"
            class="form-control"
            placeholder="https://example.com/sitemap.xml"
            name="sitemap"
          />
          <label for="sitemap">Sitemap: https://example.com/sitemap.xml</label>
        </div>
      </div>
      <div class="px-lg-3">
        <label for="restricted-directories-1">Restricted Directories:</label>
        <button
          class="btn-icon"
          id="add-directories"
          onclick="addDirectories()"
        >
          <i class="bi bi-plus-circle-fill"></i>
        </button>
      </div>
      <div class="multiple mlt-layout px-lg-3" id="directories-container">
        <div class="form-floating">
          <input
            id="restricted-directories-1"
            type="text"
            class="form-control"
            placeholder="Restricted Directories:"
            name="restricted-directories-1"
            value="/cgi-bin/"
          />
        </div>
      </div>
      <!-- <div class="robot-layout px-lg-3">
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot1"
            name="robot1"
            aria-label="Google"
          >
            <option value="">Default - Google - Allowed</option>
            <option value="Googlebot">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot2"
            name="robot2"
            aria-label="Google Image"
          >
            <option value="">Default - Google Image - Allowed</option>
            <option value="googlebot-image">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot3"
            name="robot3"
            aria-label="Google Mobile"
          >
            <option value="">Default - Google Mobile - Allowed</option>
            <option value="googlebot-mobile">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot4"
            name="robot4"
            aria-label="MSN Search"
          >
            <option value="">Default - MSN Search - Allowed</option>
            <option value="MSNBot">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot5"
            name="robot5"
            aria-label="Yahoo"
          >
            <option value="">Default - Yahoo - Allowed</option>
            <option value="Slurp">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot6"
            name="robot6"
            aria-label="Yahoo MM"
          >
            <option value="">Default - Yahoo MM - Allowed</option>
            <option value="yahoo-mmcrawler">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot7"
            name="robot7"
            aria-label="Yahoo Blogs"
          >
            <option value="">Default - Yahoo Blogs - Allowed</option>
            <option value="yahoo-blogs/v3.9">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot8"
            name="robot8"
            aria-label="Ask/Teoma"
          >
            <option value="">Default - Ask/Teoma - Allowed</option>
            <option value="Teoma">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot9"
            name="robot9"
            aria-label="GigaBlast"
          >
            <option value="">Default - GigaBlast - Allowed</option>
            <option value="Gigabot">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot10"
            name="robot10"
            aria-label="DMOZ Checker"
          >
            <option value="">Default - DMOZ Checker - Allowed</option>
            <option value="dmoz">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot11"
            name="robot11"
            aria-label="Nutch"
          >
            <option value="">Default - Nutch - Allowed</option>
            <option value="Nutch">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot12"
            name="robot12"
            aria-label="Alexa/Wayback"
          >
            <option value="">Default - Alexa/Wayback - Allowed</option>
            <option value="alexa">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot13"
            name="robot13"
            aria-label="Baidu"
          >
            <option value="">Default - Baidu - Allowed</option>
            <option value="baiduspider">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot14"
            name="robot14"
            aria-label="Naver"
          >
            <option value="">Default - Naver - Allowed</option>
            <option value="naverbot">Refused</option>
          </select>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot15"
            name="robot15"
            aria-label="MSN PicSearch"
          >
            <option value="">Default - MSN PicSearch - Allowed</option>
            <option value="psbot">Refused</option>
          </select>
        </div>
      </div> -->
      <div class="px-lg-3">
        <label for="restricted-directories-1"
          >Search Robots: Default all bots are allowed</label
        >
      </div>
      <div class="robot-layout px-lg-3">
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="robot"
            name="robot"
            aria-label="robots"
          >
            <option value="google">Google</option>
            <option value="google-image">Google Image</option>
            <option value="google-mobile">Google Mobile</option>
            <option value="msn-search">MSN Search</option>
            <option value="yahoo">Yahoo</option>
            <option value="google-image">Yahoo MM</option>
            <option value="google-image">Yahoo Blogs</option>
            <option value="google-image">Ask/Teoma</option>
            <option value="google-image">GigaBlast</option>
            <option value="google-image">DMOZ Checker</option>
            <option value="google-image">Nutch</option>
            <option value="google-image">Alexa/Wayback</option>
            <option value="google-image">Baidu</option>
            <option value="google-image">Naver</option>
            <option value="google-image">MSN PicSearch</option>
          </select>

          <script>
            function addRobot() {
              let robot = document.getElementById("robot").value;
              let permission = document.getElementById("permission").value;
              let container = document.getElementById("bot-list");
              console.log(robot, permission);
              let div = document.createElement("div");
              div.classList.add("d-flex");
              let child1 = document.createElement("div");
              child1.innerText = robot + " - ";
              let child2 = document.createElement("div");
              child2.innerText = permission;
              div.appendChild(child1);
              div.appendChild(child2);
              container.appendChild(div);
            }
          </script>
        </div>
        <div class="form-select-wrapper">
          <select
            class="form-select"
            id="permission"
            name="permission"
            aria-label="Google"
          >
            <option value="allowed">Allowed</option>
            <option value="refused">Refused</option>
          </select>
        </div>
        <div>
          <button class="btn btn-primary" onclick="addRobot()">Add Bot</button>
        </div>
      </div>
      <div class="px-lg-3">
        <div>
          <h3 class="mb-0">Bot list</h3>
        </div>
        <div id="bot-list"></div>
      </div>

      <button
        class="btn btn-primary col-12 col-md-4 col-lg-3 ms-lg-3"
        onclick="geterateRobotTxt();"
        id="robottxt-generator-button"
      >
        Generate robots.txt
      </button>
    </div>

    <div class="mt-5 position-relative px-lg-3">
      <div
        class="position-absolute copyToClipboard"
        style="top: 10px; right: 20px; z-index: 10"
        onclick="copy(event, 'generated-robotstxt')"
      >
        <span class="material-symbols-outlined text-brand"> content_copy </span>
      </div>
      <div class="form-floating output resultOutput">
        <textarea
          id="generated-robotstxt"
          class="form-control border-brand"
          placeholder="Generated Meta Tags(output)"
          style="height: 400px"
          name="generated-robotstxt"
          required
        ></textarea>
        <label for="generated-robotstxt">Generated robots.txt(output):</label>
      </div>
    </div>
  </div>

  <div
    class="container card p-3 mb-5 d-flex flex-column flex-md-row flex-wrap"
    style="gap: 0.5rem"
  >
    <div class="py-3 col-12 text-center bg-brand rounded-2">
      <h3 class="mb-0 text-white">Related tools</h3>
    </div>
    <div class="col-12 d-flex flex-wrap" style="gap: 0.5rem">
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/domain-authority-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Domain authority checker</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/page-authority-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Page Authority Checker</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/google-index-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Google Index Checker</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/meta-tag-generator.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Meta Tag Generator</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/meta-tags-analyzer.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Meta Tags Analyzer</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/open-graph-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Open Graph Checker</p>
        </div>
      </a>
    </div>
  </div>
</section>
