<section class="container bg-gradient-primary">
  <div class="container py-5 py-md-10 card mb-5">
    <div class="row text-center">
      <div
        class="col-lg-9 col-xxl-7 mx-auto"
        data-cues="zoomIn"
        data-group="welcome"
        data-interval="-200"
      >
        <h2 class="display-1">Bcrypt Hash Generator</h2>
        <p class="lead lh-sm px-md-5 px-xl-7 mb-5">
          Bcrypt Hash generator, takes string of an any length and generate a 60
          characters long encoded hash.
        </p>
      </div>
    </div>
    <div class="px-lg-3">
      <div class="form-floating output">
        <textarea
          id="text-input"
          class="form-control"
          placeholder="Textarea"
          name="text-input"
          style="height: 250px"
          required
        ></textarea>
        <label for="text-input">Input</label>
      </div>
      <div class="form-select-wrapper mt-3 col-12 col-md-3">
        <label for="round">Round</label>
        <select class="form-select" id="round" name="round" aria-label="round">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option selected="" value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div>
      <button
        class="btn btn-primary mt-2"
        id="bcrypt-hash-button"
        onclick="generateBcrypt()"
        id="robottxt-generator-button"
      >
        Generate Bcrypt Hash
      </button>

      <div class="mt-5 position-relative card rounded-2 p-3 text-center">
        <div>
          <p class="h3">Bcrypt Hash</p>
          <div class="resultOutput">
            <div
              class="copyToClipboard d-flex justify-content-end align-items-center"
              onclick="copy(event, 'result-bcrypt-hash')"
            >
              <span class="material-symbols-outlined text-brand">
                content_copy
              </span>
            </div>
            <textarea
              disabled
              id="result-bcrypt-hash"
              tabindex="0"
              class="w-100 mt-1 mb-0 rounded-2 rounded-2 p-3"
            >
$2y$06$WmBi327s0L2A07cBgQEkLOv8X381qsYK9AJ67fdxNTo7WvJ3RpKGW</textarea
            >
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
