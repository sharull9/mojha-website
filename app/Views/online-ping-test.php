<section class="container bg-gradient-primary">
  <div class="container py-5 py-md-10 card mb-5">
    <div class="row text-center">
      <div
        class="col-lg-9 col-xxl-7 mx-auto"
        data-cues="zoomIn"
        data-group="welcome"
        data-interval="-200"
      >
        <h2 class="display-1">Online Ping Test</h2>
        <p class="lead lh-sm px-md-5 px-xl-7 mb-5">
          Enter URL for online ping test.
        </p>
      </div>
      <!-- /column -->
    </div>

    <div class="d-flex toolInput flex-column flex-lg-row">
      <div class="form-floating flex-grow-1">
        <input
          id="domain-name"
          type="text"
          name="domain-name"
          class="form-control border-brand"
          placeholder="Website Url"
        />
        <label for="textInputExample">Website Url</label>
      </div>
      <!-- /.form-floating -->
      <button
        type="submit"
        class="btn btn-primary py-1 px-3"
        onclick="MozRankChecker()"
      >
        Ping Now
      </button>
    </div>
    <div class="toolInput d-flex flex-wrap justify-content-between py-3">
      <div class="form-check col-12 col-md-6 col-lg-4">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="settings-checkbox-1"
        />
        <label class="form-check-label" for="settings-checkbox-1">
          Bangaluru - IN
        </label>
      </div>
      <div class="form-check col-12 col-md-6 col-lg-4">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="settings-checkbox-2"
        />
        <label class="form-check-label" for="settings-checkbox-2">
          Toronto - CA
        </label>
      </div>
      <div class="form-check col-12 col-md-6 col-lg-4">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="settings-checkbox-3"
        />
        <label class="form-check-label" for="settings-checkbox-3">
          Tokyo - JP
        </label>
      </div>
      <div class="form-check col-12 col-md-6 col-lg-4">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="settings-checkbox-4"
        />
        <label class="form-check-label" for="settings-checkbox-4">
          New York - USA
        </label>
      </div>
      <div class="form-check col-12 col-md-6 col-lg-4">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="settings-checkbox-5"
        />
        <label class="form-check-label" for="settings-checkbox-5">
          Melbourne - AUS
        </label>
      </div>
      <div class="form-check col-12 col-md-6 col-lg-4">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="settings-checkbox-6"
        />
        <label class="form-check-label" for="settings-checkbox-6">
          London - UK
        </label>
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

  <div class="card p-3 mb-5">
    <div class="border-bottom p-3 bg-brand rounded-2 text-center">
      <h4 class="h2 text-white mb-0">What is ping test?</h4>
    </div>
    <div class="mt-3 p-3 card">
      <p class="">
        A ping test is a network utility tool used to determine the connectivity
        and responsiveness of a network. It works by sending a data packet,
        called an "ICMP Echo Request" or simply a "ping," from one device to
        another, and measuring the time it takes for the target device to
        respond. The results of the ping test can provide important information
        about the stability and speed of the network connection, as well as
        identify any potential problems or bottlenecks in the network.
      </p>
      <p class="">
        Here are the key components and steps involved in a ping test:
      </p>
      <ul
        class="p-0 ps-4"
        style="margin-bottom: 0.5rem; list-style-type: decimal"
      >
        <li>
          <span class="underline-2 yellow">Source device:</span>
          The device that initiates the ping test is known as the source device.
          This device will send the data packet to the target device.
        </li>
        <li>
          <span class="underline-2 yellow">Target device:</span>
          The device that receives the data packet is known as the target
          device. The target device will respond to the source device's ping by
          sending an "ICMP Echo Reply" packet.
        </li>
        <li>
          <span class="underline-2 yellow">Data packet:</span>
          The data packet sent during a ping test is a small packet of data that
          is sent from the source device to the target device. The packet is
          used to measure the time it takes for the target device to respond and
          the speed of the network connection.
        </li>
        <li>
          <span class="underline-2 yellow">ICMP Protocol:</span>
          The ping test uses the Internet Control Message Protocol (ICMP) to
          send and receive data packets. ICMP is a standard protocol used for
          sending error messages and diagnostic information over the Internet.
        </li>
        <li>
          <span class="underline-2 yellow">Sending the ping:</span>
          To initiate a ping test, the source device sends an ICMP Echo Request
          packet to the target device. The packet contains information about the
          size of the data packet and the number of pings to be sent.
        </li>
        <li>
          <span class="underline-2 yellow">Receiving the response:</span>
          When the target device receives the ICMP Echo Request packet, it sends
          an ICMP Echo Reply packet back to the source device. The reply packet
          contains information about the round-trip time (RTT) of the data
          packet.
        </li>
        <li>
          <span class="underline-2 yellow">Measuring the response time:</span>
          The source device measures the time it takes for the target device to
          respond to the ping. This measurement is called the Round Trip Time
          (RTT) and is expressed in milliseconds (ms). The RTT indicates the
          speed of the network connection and provides information about the
          stability of the connection.
        </li>
        <li>
          <span class="underline-2 yellow">Receiving the response:</span>
          When the target device receives the ICMP Echo Request packet, it sends
          an ICMP Echo Reply packet back to the source device. The reply packet
          contains information about the round-trip time (RTT) of the data
          packet.
        </li>
      </ul>
      <p class="mb-0">
        In conclusion, a ping test is a simple but effective tool for
        determining the connectivity and responsiveness of a network. By
        measuring the RTT and analyzing the results, network administrators can
        identify potential problems, optimize network performance, and improve
        network stability.
      </p>
    </div>
  </div>
  <div class="card p-3 mb-5">
    <div class="border-bottom">
      <h4 class="h2 text-brand mb-0 pb-3">Ping test from mutiple locations</h4>
    </div>
    <div>
      <p class="pt-3">
        To perform a ping test from multiple locations, you can use a network
        testing service that has multiple servers located in different
        geographic locations. Mojha's use multiple server to achive this. Mojha
        performs a ping test from each of their servers and provide a detailed
        report on the response times and other network metrics, such as packet
        loss, jitter, and more.
      </p>
      <p class="mb-0">
        Mojha online ping test is a popular network testing service that allows
        you to test your network performance from multiple servers located in
        various locations around the world. Another option is to use a network
        monitoring tool that provides real-time network visibility and can
        perform ping tests from multiple locations to help you identify network
        performance issues and troubleshoot network connectivity problems.
      </p>
    </div>
  </div>
  <div class="card p-3 mb-5">
    <div class="border-bottom">
      <h4 class="h2 text-brand mb-0 pb-3">How to use Mojha's ping test</h4>
    </div>
    <div>
      <p class="pt-3">
        Mojha's online ping test is a tool that allows users to test the
        connectivity and responsiveness of a network. The ping test works by
        sending a data packet, called a "ping," to a target device and measuring
        the time it takes for the device to respond. The results of the ping
        test provide information about the stability and speed of the network
        connection.
      </p>
      <p>Here's how to use Mojha's online ping test:</p>
      <ul
        class="p-0 ps-4"
        style="margin-bottom: 0.5rem; list-style-type: decimal"
      >
        <li>
          <span class="underline-2">Open Mojha's online ping test tool:</span>
          There are many online ping test tools available, Mojha's online ping
          test is free and easy to use. Simply open a web browser and navigate
          to one of onine ping test tools provided by mojha.com.
        </li>
        <li>
          <span class="underline-2">Enter the target device:</span>
          In the online ping test tool, enter the target device's IP address or
          URL.
        </li>
        <li>
          <span class="underline-2">Initiate the test:</span>
          Click the "Ping" button to initiate the test. The tool will send a
          ping to the target device and measure the time it takes for the device
          to respond.
        </li>
        <li>
          <span class="underline-2">Review the results:</span>
          After the test is complete, review the results to see the average ping
          time, the number of packets sent and received, and any lost packets.
        </li>
      </ul>
      <p class="mb-0">
        The results of the online ping test can help you determine if there are
        any issues with your network connectivity and identify potential
        bottlenecks or other problems that may be affecting your network
        performance. If you encounter problems with the network connectivity,
        you may need to contact your network administrator or Internet Service
        Provider (ISP) for assistance.
      </p>
    </div>
  </div>
  <div class="card p-3 mb-5">
    <div class="border-bottom">
      <h4 class="h2 text-brand mb-0 pb-3">PHP code for ping test</h4>
    </div>
    <div>
      <p class="pt-3">
        Here's a simple PHP code for a ping test that uses the exec function:
      </p>
<pre>
<code lang="PHP">
<?php

$host = "example.com";
$output = exec("ping -n 1 $host");

if (strpos($output, "100% packet loss") !== false) {
  echo "$host is down.";
} else {
  echo "$host is up.";
}

?>
</code>
</pre>
      <p class="mb-0">
        This code uses the exec function to run a command-line ping command with
        a single -n 1 argument, which specifies to send only one packet to the
        target host. The $host variable can be updated with the desired target
        host name or IP address. The strpos function is then used to search the
        $output string for the text "100% packet loss", which indicates that the
        host is down. If the host is up, the code will display a message
        indicating that the host is up.
      </p>
    </div>
  </div>
  <div class="card p-3 mb-5">
    <div class="border-bottom">
      <h4 class="h2 text-brand mb-0 pb-3">Python code for ping test</h4>
    </div>
    <div>
      <p class="pt-3">
        Here is an example of a simple Python code for a ping test:
      </p>
      <code lang="PHP">
<pre>
import os

hostname = "example.com"
response = os.system("ping -c 1 " + hostname)

if response == 0:
  print(hostname, 'is up!')
else:
  print(hostname, 'is down!')
</pre>
      </code>
      <p class="mb-0">
        This code uses the os module to run a command-line ping command with a
        single -c 1 argument, which specifies to send only one packet to the
        target host. The hostname variable can be updated with the desired
        target host name or IP address. The response variable stores the return
        value of the os.system function, which indicates the status of the ping
        command. If the response is 0, it means that the host is up and a
        message is printed indicating that the host is up. If the response is
        not 0, it means that the host is down and a message is printed
        indicating that the host is down.
      </p>
    </div>
  </div>
</section>
