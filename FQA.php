<?php
include("inc/header.php")
?>


<!-- Design on Dribbble: https://dribbble.com/shots/3967265-FAQ -->
<h1>Frequently Asked Questions</h1>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Frequently Asked Questions</title>
  <!-- CSS bağlantısı -->
  <link rel="stylesheet" href="styles.css">
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

  * {
    box-sizing: border-box;
  }

  body {
    background-color: #f0f0f0;
    font-family: 'Muli', sans-serif;
  }

  h1 {
    margin: 50px 0 30px;
    text-align: center;
  }

  .faqs-container {
    margin: 0 auto;
    max-width: 600px;
  }

  .faq {
    background-color: transparent;
    border: 1px solid #9FA4A8;
    border-radius: 10px;
    padding: 30px;
    position: relative;
    overflow: hidden;
    margin: 20px 0;
    transition: 0.3s ease;
  }

  .faq.active {
    background-color: #fff;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0.1);
  }

  .faq.active::after,
  .faq.active::before {
    color: #2ecc71;
    content: '\f075';
    font-family: 'Font Awesome 5 Free';
    font-size: 7rem;
    position: absolute;
    opacity: 0.2;
    top: 20px;
    left: 20px;
    z-index: 0;
  }

  .faq.active::before {
    color: #3498db;
    top: -10px;
    left: -30px;
    transform: rotateY(180deg);
  }

  .faq-title {
    margin: 0 35px 0 0;
  }

  .faq-text {
    display: none;
    margin: 30px 0 0;
  }

  .faq.active .faq-text {
    display: block;
  }

  .faq-toggle {
    background-color: transparent;
    border: none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    padding: 0;
    position: absolute;
    top: 30px;
    right: 30px;
    height: 30px;
    width: 30px;
  }

  .faq-toggle:focus {
    outline: none;
  }

  .faq.active .faq-toggle {
    background-color: #9FA4A8;
  }

  .faq-toggle .fa-times {
    display: none;
  }

  .faq.active .faq-toggle .fa-times {
    display: block;
  }

  .faq-toggle .fa-chevron-down {
    color: #83888E;
  }

  .faq.active .faq-toggle .fa-chevron-down {
    display: none;
  }

  /* SOCIAL PANEL CSS */
  .social-panel-container {
    position: fixed;
    right: 0;
    bottom: 80px;
    transform: translateX(100%);
    transition: transform 0.4s ease-in-out;
  }

  .social-panel-container.visible {
    transform: translateX(-10px);
  }

  .social-panel {
    background-color: #fff;
    border-radius: 16px;
    box-shadow: 0 16px 31px -17px rgba(0, 31, 97, 0.6);
    border: 5px solid #001F61;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'Muli';
    position: relative;
    height: 169px;
    width: 370px;
    max-width: calc(100% - 10px);
  }

  .social-panel button.close-btn {
    border: 0;
    color: #97A5CE;
    cursor: pointer;
    font-size: 20px;
    position: absolute;
    top: 5px;
    right: 5px;
  }

  .social-panel button.close-btn:focus {
    outline: none;
  }

  .social-panel p {
    background-color: #001F61;
    border-radius: 0 0 10px 10px;
    color: #fff;
    font-size: 14px;
    line-height: 18px;
    padding: 2px 17px 6px;
    position: absolute;
    top: 0;
    left: 50%;
    margin: 0;
    transform: translateX(-50%);
    text-align: center;
    width: 235px;
  }

  .social-panel p i {
    margin: 0 5px;
  }

  .social-panel p a {
    color: #FF7500;
    text-decoration: none;
  }

  .social-panel h4 {
    margin: 20px 0;
    color: #97A5CE;
    font-family: 'Muli';
    font-size: 14px;
    line-height: 18px;
    text-transform: uppercase;
  }

  .social-panel ul {
    display: flex;
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  .social-panel ul li {
    margin: 0 10px;
  }

  .social-panel ul li a {
    border: 1px solid #DCE1F2;
    border-radius: 50%;
    color: #001F61;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    width: 50px;
    text-decoration: none;
  }

  .social-panel ul li a:hover {
    border-color: #FF6A00;
    box-shadow: 0 9px 12px -9px #FF6A00;
  }

  .floating-btn {
    border-radius: 26.5px;
    background-color: #001F61;
    border: 1px solid #001F61;
    box-shadow: 0 16px 22px -17px #03153B;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    line-height: 20px;
    padding: 12px 20px;
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999;
  }

  .floating-btn:hover {
    background-color: #ffffff;
    color: #001F61;
  }

  .floating-btn:focus {
    outline: none;
  }

  .floating-text {
    background-color: #001F61;
    border-radius: 10px 10px 0 0;
    color: #fff;
    font-family: 'Muli';
    padding: 7px 15px;
    position: fixed;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    z-index: 998;
  }

  .floating-text a {
    color: #FF7500;
    text-decoration: none;
  }

  @media screen and (max-width: 480px) {

    .social-panel-container.visible {
      transform: translateX(0px);
    }

    .floating-btn {
      right: 10px;
    }
  }
</style>
<body>


  <div class="faqs-container">
    <div class="faq active">
      <h3 class="faq-title">
        Why shouldn't we trust atoms?
      </h3>
      <p class="faq-text">
        They make up everything.
      </p>
      <button class="faq-toggle">
        <i class="fas fa-chevron-down"></i>
        <i class="fas fa-times"></i>
      </button>
    </div>

    <div class="faq">
      <h3 class="faq-title">
        What do you call someone with no body and no nose?
      </h3>
      <p class="faq-text">
        Nobody knows.
      </p>
      <button class="faq-toggle">
        <i class="fas fa-chevron-down"></i>
        <i class="fas fa-times"></i>
      </button>
    </div>

    <div class="faq">
      <h3 class="faq-title">
        What's the object-oriented way to become wealthy?
      </h3>
      <p class="faq-text">
        Inheritance.
      </p>
      <button class="faq-toggle">
        <i class="fas fa-chevron-down"></i>
        <i class="fas fa-times"></i>
      </button>
    </div>

    <div class="faq">
      <h3 class="faq-title">
        How many tickles does it take to tickle an octopus?
      </h3>
      <p class="faq-text">
        Ten-tickles!
      </p>
      <button class="faq-toggle">
        <i class="fas fa-chevron-down"></i>
        <i class="fas fa-times"></i>
      </button>
    </div>

    <div class="faq">
      <h3 class="faq-title">
        What is: 1 + 1?
      </h3>
      <p class="faq-text">
        Depends on who are you asking.
      </p>
      <button class="faq-toggle">
        <i class="fas fa-chevron-down"></i>
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>


  <!-- SOCIAL PANEL HTML -->
  <div class="social-panel-container">
    <div class="social-panel">
      <p>Created with <i class="fa fa-heart"></i> by
        <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
      </p>
      <button class="close-btn"><i class="fas fa-times"></i></button>
      <h4>Get in touch on</h4>
      <ul>
        <li>
          <a href="https://www.patreon.com/florinpop17" target="_blank">
            <i class="fab fa-discord"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/florinpop1705" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li>
          <a href="https://linkedin.com/in/florinpop17" target="_blank">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>
        <li>
          <a href="https://facebook.com/florinpop17" target="_blank">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li>
          <a href="https://instagram.com/florinpop17" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <button class="floating-btn">
    Get in Touch
  </button>

  <div class="floating-text">
    Part of <a href="https://florin-pop.com/blog/2019/09/100-days-100-projects" target="_blank">#100Days100Projects</a>
  </div>
</body>
<script>
  const toggles = document.querySelectorAll('.faq-toggle');

  toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
      toggle.parentNode.classList.toggle('active');
    });
  });

  // SOCIAL PANEL JS
  const floating_btn = document.querySelector('.floating-btn');
  const close_btn = document.querySelector('.close-btn');
  const social_panel_container = document.querySelector('.social-panel-container');

  floating_btn.addEventListener('click', () => {
    social_panel_container.classList.toggle('visible')
  });

  close_btn.addEventListener('click', () => {
    social_panel_container.classList.remove('visible')
  });
</script>

<?php
include("inc/footer.php")
?>