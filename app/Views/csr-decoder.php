<section class="container bg-gradient-primary">
  <div class="container py-5 py-md-10 card mb-5">
    <div class="row text-center">
      <div
        class="col-lg-9 col-xxl-7 mx-auto"
        data-cues="zoomIn"
        data-group="welcome"
        data-interval="-200"
      >
        <h2 class="display-1">CSR Decoder</h2>
        <p class="lead lh-sm px-md-5 px-xl-7 mb-5">
          Decode your certificate CSR using Mojha's CSR Decoder
        </p>
      </div>
      <!-- /column -->
    </div>

    <!-- /.row -->
    <div
      class="d-flex flex-column align-items-start w-100 w-md-50 mx-auto"
      style="gap: 0.5rem"
    >
      <div class="form-floating w-100 output position-relative">
        <div
          class="position-absolute copyToClipboard"
          style="top: 10px; right: 10px; z-index: 10"
          onclick="copy(event, 'csr-input')"
        >
          <span class="material-symbols-outlined text-brand">
            content_copy
          </span>
        </div>
        <textarea
          id="csr-input"
          class="form-control border-brand"
          placeholder="Output"
          style="height: 400px; font-family: revert"
          name="csr-input"
          required
        ></textarea>
        <label for="csr-input">Output</label>
      </div>
      <!-- /.form-floating -->
      <button
        type="submit"
        class="btn btn-primary py-1 px-3"
        onclick="CSRDecoder()"
      >
        Decode CSR
      </button>
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
      <h4 class="h2 text-white mb-0">What is CSR file?</h4>
    </div>
    <div class="mt-3 p-3 card">
      <p class="">
        A CSR (Certificate Signing Request) file is a plain text file that
        contains information about the entity requesting a digital certificate
        from a certificate authority (CA). The file format for a CSR is
        specified in the X.509 standard and is based on the Privacy-Enhanced
        Mail (PEM) format.
      </p>
      <p class="">
        A CSR file typically starts with a header line that identifies the file
        as a PEM-encoded file and includes the following information:
      </p>
      <div class="card p-3">
        <p>-----BEGIN CERTIFICATE REQUEST-----</p>
        <p>
          The contents of the CSR follow this header and are encoded using
          Base64 encoding. The contents of the CSR include information about the
          entity and its public key. The file concludes with a footer line that
          indicates the end of the PEM-encoded file:
        </p>
        <p>-----END CERTIFICATE REQUEST-----</p>
      </div>
      <p>
        A CSR file is typically generated using a key pair, which includes a
        private key and a public key. The private key is kept secret by the
        entity and is used to encrypt information. The public key is included in
        the CSR and is used by the certificate authority to issue the
        certificate.
      </p>
      <p>
        It's important to keep the private key secure and to never share it with
        others. The private key is used to encrypt information and to sign
        transactions, and if it were to fall into the wrong hands, it could be
        used for malicious purposes.
      </p>
      <p class="mb-0">
        The format of a CSR file is standardized and widely used, and CSR files
        can be generated using a variety of tools and programming languages.
        Once generated, a CSR file can be submitted to a certificate authority
        to request the issuance of a certificate.
      </p>
    </div>
  </div>
  <div class="card p-3 mb-5">
    <div class="border-bottom p-3 bg-brand rounded-2 text-center">
      <h4 class="h2 text-white mb-0">What is CSR Decoder?</h4>
    </div>
    <div class="mt-3 p-3 card">
      <p class="">
        A CSR (Certificate Signing Request) decoder is a tool used to decode and
        view the contents of a CSR file. A CSR is a text file that contains
        information about the entity requesting a digital certificate from a
        certificate authority (CA). The information in a CSR is used by the CA
        to issue a certificate that is specific to the entity and its needs.
      </p>
      <p class="">
        The information contained in a CSR file includes the following:
      </p>
      <ul
        class="p-0 ps-4"
        style="margin-bottom: 0.5rem; list-style-type: decimal"
      >
        <li>
          <span class="underline-2"> Common Name (CN): </span>
          The Common Name is the fully-qualified domain name (FQDN) of the
          entity that will use the certificate. This is the domain name that
          will be protected by the certificate, such as www.example.com.
        </li>
        <li>
          <span class="underline-2"> Organization Name (O): </span>
          The Organization Name is the name of the entity that will use the
          certificate. This is typically the name of a company or other legal
          entity.
        </li>
        <li>
          <span class="underline-2"> Organizational Unit (OU): </span>
          The Organizational Unit is a division or unit within the entity that
          will use the certificate. This field is optional, but can be useful
          for specifying a specific department within the entity that will use
          the certificate.
        </li>
        <li>
          <span class="underline-2"> Locality (L): </span>
          The Locality is the city or town where the entity is located.
        </li>
        <li>
          <span class="underline-2"> State or Province (ST): </span>
          The State or Province is the state or province where the entity is
          located.
        </li>
        <li>
          <span class="underline-2"> Country (C): </span>
          The Country is the two-letter country code where the entity is
          located.
        </li>
        <li>
          <span class="underline-2"> Public Key: </span>
          The Public Key is a critical component of the CSR and is used by the
          certificate authority to issue the certificate. The public key is used
          for encryption and is included in the certificate.
        </li>
      </ul>
      <p>
        To use Mojha's CSR decoder, you simply upload the CSR file to the
        decoder tool, and the tool will display the information contained in the
        CSR in a readable format. This information can be reviewed to verify
        that the information in the CSR is correct and that the entity is
        properly identified.
      </p>
      <p class="mb-0">
        A CSR decoder can be useful for a variety of purposes, including
        verifying the information in a CSR before submitting it to a certificate
        authority, troubleshooting issues with a certificate, and ensuring that
        the information contained in a CSR is accurate and complete. By using a
        CSR decoder, you can ensure that the certificate issued by the
        certificate authority is properly aligned with the needs of the entity
        and its website.
      </p>
    </div>
  </div>
  <div class="card p-3 mb-5">
    <div class="border-bottom p-3 bg-brand rounded-2 text-center">
      <h4 class="h2 text-white mb-0">How to use Mojha's CSR decoder?</h4>
    </div>
    <div class="mt-3 p-3 card">
      <p class="">To use a CSR decoder, follow these steps:</p>
      <ul
        class="p-0 ps-4"
        style="margin-bottom: 0.5rem; list-style-type: decimal"
      >
        <li>
          Obtain the CSR file: Before you can use a CSR decoder, you must have a
          CSR file. If you don't have a CSR file, you can generate one using a
          variety of tools and programming languages.
        </li>
        <li>
          Open Mojha's CSR decoder: There are many CSR decoders available
          online, and you can choose one based on your specific needs and
          preferences. Mojha's CSR decoder is free and easy to use tool.
        </li>
        <li>
          Upload the CSR file: Once you have chosen a CSR decoder, you can
          upload the CSR file to the decoder by either selecting the file from
          your computer or pasting the contents of the file into a text box.
        </li>
        <li>
          Decode the CSR: After uploading the CSR file, the decoder will decode
          the contents of the file and display the information in a readable
          format. This information includes the entity's common name,
          organization name, organizational unit, locality, state or province,
          country, and public key.
        </li>
        <li>
          Review the information: Review the information displayed by the CSR
          decoder to ensure that it is accurate and complete. Check the entity's
          name, location, and public key to ensure that everything is correct.
        </li>
        <li>
          Save the information: If desired, you can save the information
          displayed by the CSR decoder for later use. This information can be
          useful for troubleshooting issues with a certificate or for verifying
          the information in a CSR before submitting it to a certificate
          authority.
        </li>
      </ul>
      <p class="mb-0">
        Using a CSR decoder is a simple and straightforward process that can
        help you verify the information in a CSR and ensure that the certificate
        issued by the certificate authority is properly aligned with the needs
        of the entity and its website.
      </p>
    </div>
  </div>
</section>
