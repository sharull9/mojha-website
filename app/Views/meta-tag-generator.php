<section class="container bg-gradient-primary">
  <div class="container py-5 py-md-10 card mb-5">
    <div class="row text-center">
      <div
        class="col-lg-9 col-xxl-7 mx-auto"
        data-cues="zoomIn"
        data-group="welcome"
        data-interval="-200"
      >
        <h2 class="display-1">Meta Tag Generator</h2>
        <p class="lead lh-sm px-md-5 px-xl-7 mb-5">
          Generate meta tags for your website in a very simple way.
        </p>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="meta-tag-layout px-lg-3">
      <div class="form-floating">
        <input
          id="site-title"
          type="text"
          name="site-title"
          class="form-control border-brand"
          placeholder="Enter Domain Name"
        />
        <label for="site-title">Site Title</label>
      </div>
      <!-- /.form-floating -->
      <div class="form-floating">
        <textarea
          id="site-description"
          class="form-control border-brand"
          placeholder="Site Description"
          style="height: 100px"
          name="site-description"
          required
        ></textarea>
        <label for="site-description">Site Description</label>
      </div>
      <!-- /.form-floating -->
      <div class="form-floating">
        <textarea
          id="site-keywords"
          class="form-control border-brand"
          placeholder="Site Description"
          style="height: 100px"
          name="site-keywords"
          required
        ></textarea>
        <label for="site-keywords">Site Keywords (Separate with commas)</label>
      </div>
      <!-- /.form-floating -->

      <div class="form-floating">
        <select
          class="form-select py-0 border-brand"
          aria-label="Website Language"
          id="website-language"
          name="website-language"
        >
          <option selected>Website Language</option>
          <option value="English">English</option>
          <option value="French">French</option>
          <option value="Spanish">Spanish</option>
          <option value="Russian">Russian</option>
          <option value="Arabic">Arabic</option>
          <option value="Japanese">Japanese</option>
          <option value="Korean">Korean</option>
          <option value="Hindi">Hindi</option>
          <option value="Portuguese">Portuguese</option>
          <option value="N/A">No Language Tag</option>
        </select>
      </div>

      <div class="form-floating">
        <select
          class="form-select py-0 border-brand"
          aria-label="Website Content Type"
          id="website-content-type"
          name="website-content-type"
        >
          <option selected>Website Content Type</option>
          <option value="text/html; charset=utf-8">UTF-8</option>
          <option value="text/html; charset=utf-16">UTF-16</option>
          <option value="text/html; charset=iso-8859-1">ISO-8859-1</option>
          <option value="text/html; charset=windows-1252">WINDOWS-1252</option>
        </select>
      </div>

      <div class="form-floating">
        <select
          class="form-select py-0 border-brand"
          aria-label="Website Content Type"
          id="allow-indexing"
          name="allow-indexing"
        >
          <option selected>Allow indexing</option>
          <option value="index">Yes</option>
          <option value="noindex">No</option>
        </select>
      </div>

      <div class="form-floating pb-5">
        <select
          class="form-select py-0 border-brand"
          aria-label="Website Content Type"
          id="allow-follow"
          name="allow-follow"
        >
          <option selected>Allow search engin to follow all links?</option>
          <option value="follow">Yes</option>
          <option value="nofollow">No</option>
        </select>
      </div>

      <div class="border-top border-brand" style="display: grid; gap: 0.5rem">
        <div class="pt-5">
          <h4 class="text-center">(Optional Meta Tags)</h4>
        </div>
        <div>
          <div class="form-check">
            <input
              class="form-check-input border-brand"
              type="checkbox"
              value=""
              id="site-revisit-checkbox"
              name="site-revisit-checkbox"
            />
            <label class="form-check-label" for="site-revisit-checkbox">
              Search engines revisit after
            </label>

            <!-- /.form-floating -->
          </div>
          <div class="form-floating">
            <input
              id="site-revisit"
              name="site-revisit"
              type="number"
              class="form-control border-brand"
              placeholder="Days"
            />
            <label for="site-revisit" class="">Days</label>
          </div>
        </div>
        <div>
          <div class="form-check">
            <input
              class="form-check-input border-brand"
              type="checkbox"
              value=""
              id="site-author-checkbox"
              name="site-author-checkbox"
            />
            <label class="form-check-label" for="site-author-checkbox">
              Author
            </label>
          </div>
          <div class="form-floating">
            <input
              id="site-author"
              name="site-author"
              type="text"
              class="form-control border-brand"
              placeholder="Author Name"
            />
            <label for="site-author" class="">Author Name</label>
          </div>
          <!-- /.form-floating -->
        </div>
      </div>

      <button
        type="submit"
        class="btn btn-primary"
        onclick="generateMetaTags()"
      >
        Generate Meta Tags
      </button>
      <div class="mt-5 position-relative">
        <div
          class="position-absolute copyToClipboard"
          style="top: 10px; right: 10px; z-index: 10"
          onclick="copy(event, 'generated-metadata')"
        >
          <span class="material-symbols-outlined text-brand">
            content_copy
          </span>
        </div>
        <div class="form-floating output">
          <textarea
            id="generated-metadata"
            class="form-control border-brand"
            placeholder="Generated Meta Tags(output)"
            style="height: 200px"
            name="generated-metadata"
            required
          ></textarea>
          <label for="generated-metadata">Generated Meta Tags(output)</label>
        </div>
      </div>
    </div>
    <!-- /.container -->
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

  <div class="card p-3 mb-5">
    <div class="border-bottom p-3 bg-brand rounded-2 text-center">
      <h4 class="h2 text-white mb-0">HTML Meta Tag</h4>
    </div>
    <div class="mt-3 p-3 card">
      <p class="">
        The HTML meta tag is an HTML element used to provide metadata about a
        web page. The metadata includes information such as the page's
        description, keywords, author, and other relevant information that is
        not displayed directly on the page.
      </p>
      <p class="">
        Meta tags are placed in the head section of an HTML document and are
        typically used by search engines to crawl and index a web page. The
        information provided by meta tags can help search engines better
        understand the content of a web page and display it more accurately in
        search results.
      </p>
      <p>There are several different types of meta tags, including:</p>
      <ul class="p-0 ps-4" style="margin-bottom: 0.5rem; list-style-type: disc">
        <li>
          <span class="underline-2">Title tag:</span>
          The title tag is the most important meta tag and provides a brief
          description of the page's content. It is displayed in the search
          engine results and is also used as the default title in the browser's
          tab.
        </li>
        <li>
          <span class="underline-2">Description tag:</span>
          The description tag provides a more detailed description of the page's
          content and is displayed in the search engine results under the title.
        </li>
        <li>
          <span class="underline-2">Keywords tag:</span>
          The keywords tag provides a list of keywords related to the page's
          content. However, this tag is no longer used by most search engines
          and is generally considered to be of little value.
        </li>
        <li>
          <span class="underline-2">Robots tag:</span>
          The robots tag is used to specify the behavior of search engine robots
          when they crawl and index the page. For example, the tag can be used
          to specify that a page should not be indexed or followed.
        </li>
        <li>
          <span class="underline-2">OG (Open Graph) tags:</span>
          OG tags are used to provide information about a web page for social
          media platforms, such as Facebook and Twitter. They can help improve
          the visibility of a web page on social media and can increase the
          chances of the page being shared and promoted by users.
        </li>
        <li>
          <span class="underline-2">Keywords tag:</span>
          While the keywords tag is no longer used by most search engines, it
          can still be useful for tracking the effectiveness of a page's content
          and keyword strategy.
        </li>
      </ul>
      <p class="mb-0">
        In conclusion, meta tags play a crucial role in SEO and can help improve
        the visibility and ranking of a web page in search engine results. It is
        important to include relevant and accurate meta tags on every page of a
        website to ensure that search engines can properly understand and index
        the content. Additionally, incorporating meta tags into a comprehensive
        SEO strategy, along with other best practices such as keyword research,
        content optimization, and link building, can help a website rank higher
        in search results.
      </p>
    </div>
  </div>
  <div class="card p-3 mb-5">
    <div class="border-bottom p-3 bg-brand rounded-2 text-center">
      <h4 class="h2 text-white mb-0">Meta Tag Generator</h4>
    </div>
    <div class="mt-3 p-3 card">
      <p class="">
        A meta tag generator is a tool that can automatically generate meta tags
        for a web page based on the information provided by the user. Meta tag
        generators can be used to quickly create and implement meta tags, saving
        time and effort for website owners and developers.
      </p>
      <p class="">
        To use a meta tag generator, simply enter the relevant information about
        the web page, such as the title, description, and keywords. The tool
        will then generate the appropriate meta tags, which can be copied and
        pasted into the HTML code of the web page.
      </p>
      <p class="">
        While meta tag generators can be useful for quickly creating basic meta
        tags, it is important to keep in mind that the quality and relevance of
        the meta tags will depend on the information provided by the user.
        Therefore, it is recommended to carefully review and edit the generated
        meta tags to ensure that they accurately represent the content of the
        web page and are optimized for search engines.
      </p>
      <p class="mb-0">
        It is also important to note that while meta tags are an important
        aspect of SEO, they are just one part of a comprehensive optimization
        strategy. Other factors, such as the quality and relevance of the
        content, the structure of the website, and the quality of external
        links, also play a significant role in determining the ranking of a web
        page in search engine results.
      </p>
    </div>
  </div>
  <div class="card p-3 mb-5">
    <div class="border-bottom p-3 bg-brand rounded-2 text-center">
      <h4 class="h2 text-white mb-0">How to use meta tag generator?</h4>
    </div>
    <div class="mt-3 p-3 card">
      <p class="">
        Using a meta tag generator is relatively simple and straightforward.
        Here is a basic overview of the steps to use a meta tag generator:
      </p>
      <ul class="p-0 ps-4" style="margin-bottom: 0.5rem; list-style-type: disc">
        <li>
          <span class="underline-2">Choose mojha's meta tag generator:</span>
          There are many meta tag generators available online, both paid and
          free. Mojha's metat tag generator is free and easy to use.
        </li>
        <li>
          <span class="underline-2">Enter the relevant information:</span>
          Once you have chosen mojha's meta tag generator, you will need to
          enter the relevant information about your web page, such as the page
          title, description, and keywords.
        </li>
        <li>
          <span class="underline-2">Generate the meta tags:</span>
          After entering the information, the meta tag generator will
          automatically generate the appropriate meta tags for your web page.
        </li>
        <li>
          <span class="underline-2">Review the generated meta tags:</span>
          Before implementing the meta tags, it's important to review them to
          ensure that they are accurate and relevant to the content of your web
          page. Make any necessary changes or additions before proceeding.
        </li>
        <li>
          <span class="underline-2">Implement the meta tags:</span>
          Once you are satisfied with the generated meta tags, you can copy and
          paste them into the HTML code of your web page. It is usually
          recommended to place the meta tags in the head section of the HTML
          code.
        </li>
        <li>
          <span class="underline-2">Test the meta tags:</span>
          After implementing the meta tags, test your web page to ensure that
          the meta tags are properly displayed in the HTML code and that the
          information is accurate.
        </li>
      </ul>
      <p class="mb-0">
        In conclusion, using a meta tag generator can be a useful tool for
        quickly generating and implementing meta tags for your web page.
        However, it is important to carefully review the generated meta tags and
        make any necessary changes to ensure that they accurately represent the
        content of your web page and are optimized for search engines.
      </p>
    </div>
  </div>
</section>
