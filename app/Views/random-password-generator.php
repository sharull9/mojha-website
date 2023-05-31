<section class="container bg-gradient-primary">
  <div class="container py-5 py-md-10 card mb-5">
    <div class="row text-center">
      <div
        class="col-lg-9 col-xxl-7 mx-auto"
        data-cues="zoomIn"
        data-group="welcome"
        data-interval="-200"
      >
        <h2 class="display-1">Random password generator</h2>
        <p class="lead lh-sm px-md-5 px-xl-7 mb-5">
          With a single click, you can generate strong, random, and unique
          password using Mojha's online random password generator.
        </p>
      </div>
    </div>
    <div class="px-md-3">
      <div>
        <p class="mb-0 fw-bold">Password Criteria:</p>
        <div class="criteria-layout mt-2">
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="includeSymbols"
              id="include-symbols"
              checked
            />
            <label class="form-check-label" for="include-symbols">
              Include Symbols (<b>e.g. @#$%</b>):
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="includeNumbers"
              id="include-numbers"
              checked
            />
            <label class="form-check-label" for="include-numbers">
              Include Numbers (<b>e.g. 12345</b>):
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="includeLowercase"
              id="include-lowercase"
              checked
            />
            <label class="form-check-label" for="include-lowercase">
              Include Lowercase (<b>e.g. abcd</b>):
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="includeUppercase"
              id="include-uppercase"
              checked
            />
            <label class="form-check-label" for="include-uppercase">
              Include Uppercase (<b>e.g. ABCD</b>):
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="excludeSimillar"
              id="exclude-simillar"
              checked
            />
            <label class="form-check-label" for="exclude-simillar">
              Exclude Similar (<b>e.g. i, l, 1, L, o, 0, O</b>)
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value="excludeAmbiguous"
              id="exclude-ambiguous"
              checked
            />
            <label class="form-check-label" for="exclude-ambiguous">
              Exclude Ambiguous(<b>e.g. { } [ ] ( ) </b>)
            </label>
          </div>
        </div>
      </div>
      <div class="form-floating mt-5 col-12 col-md-5 col-lg-3">
        <input
          id="password-length"
          type="text"
          class="form-control"
          placeholder="Password Length"
          name="password-length"
          value="10"
        />
        <label for="password-length">Password Length</label>
      </div>
      <button
        class="btn btn-primary mx-auto mt-5"
        id="password-generator-button"
        onclick="passwordGenerator()"
        id="robottxt-generator-button"
      >
        Generate Password
      </button>

      <div
        class="mt-5 position-relative border rounded-2 border-brand p-3 text-center"
      >
        <div>
          <p class="h3">Your New Password</p>
          <div class="position-relative">
            <div
              class="position-absolute copyToClipboard d-flex justify-content-center align-items-center"
              style="right: 10px; top: 0; bottom: 0; z-index: 10"
              onclick="copy(event, 'result-password-generator')"
            >
              <span class="material-symbols-outlined text-white">
                content_copy
              </span>
            </div>
            <input
              disabled
              id="result-password-generator"
              tabindex="0"
              class="w-100 text-center mb-0 bg-navy rounded-2 rounded-2 text-white p-3"
              value="u9=+4W-z3q"
            />
          </div>
        </div>
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
