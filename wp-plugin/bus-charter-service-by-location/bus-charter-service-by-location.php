<?php
/**
 * Plugin Name: Bus Charter - Service by Location Embed
 * Description: Renders the "Service by Location" content block via the [bus_charter_service_by_location] shortcode. Outputs raw HTML/CSS untouched by WordPress's content sanitizer, since shortcode output is never passed through wp_kses (that's the whole point of shortcodes -- they're developer-authored PHP, not user-submitted content). Use Elementor's "Shortcode" widget (not the "HTML" widget) and enter: [bus_charter_service_by_location]
 * Version: 1.0.0
 * Author: Bus Charter
 */

defined( 'ABSPATH' ) || exit;

function bcsbl_render_service_by_location() {
	return <<<'HTML'
<style>
  #sbl-embed { font-family: "Red Hat Display", system-ui, sans-serif; -webkit-font-smoothing: antialiased; background: #FFFFFF; color: #0D0001; }
  #sbl-embed h1, #sbl-embed h2, #sbl-embed h3 { font-family: Lato, system-ui, sans-serif; }
  #sbl-embed a { color: #0D0001; text-decoration: none; }
  #sbl-embed a:hover { color: #DA1A20; }
.dc-h13:hover { opacity: 0.8; }
.dc-h15:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h16:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h17:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h18:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h19:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h20:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h21:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h22:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h23:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h24:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h25:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h26:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h27:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h28:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h29:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h31:hover { opacity: 0.8; }
.dc-h33:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h34:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h35:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h36:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h37:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h38:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h40:hover { opacity: 0.8; }
.dc-h42:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h43:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h44:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h45:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h46:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h47:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h48:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h49:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h50:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h51:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h52:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h53:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h54:hover { opacity: 0.8; }
.dc-h56:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h57:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h58:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h59:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h60:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h61:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h62:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h63:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h64:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h65:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h66:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h67:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h68:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h69:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h70:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h71:hover { border-color: #DA1A20; background: #FDF3F4; color: #DA1A20; }
.dc-h72:hover { background: #B9161B; color: #FFFFFF; }
.dc-h88:hover { opacity: 0.75; }
  /* --- Responsive layout --- */
  #sbl-embed { overflow-x: hidden; }
  .nav-toggle-checkbox { display: none; }
  .logo-badge { display: flex !important; justify-content: flex-start !important; }
  .nav-toggle-label { display: none; cursor: pointer; align-items: center; justify-content: center; padding: 6px; margin-left: auto; }
  .site-header { position: relative; }
  @media (max-width: 900px) {
    .topbar-info { display: none !important; }
    .topbar-row { padding: 10px 20px !important; }
    .site-header-inner { justify-content: space-between !important; padding: 14px 20px !important; gap: 16px !important; }
    .nav-toggle-label { display: flex !important; }
    .main-nav {
      display: none !important;
      position: absolute !important;
      top: 100% !important;
      left: 0 !important;
      right: 0 !important;
      flex-direction: column !important;
      align-items: stretch !important;
      justify-content: flex-start !important;
      background: #2A2A34 !important;
      padding: 6px 20px 20px !important;
      gap: 2px !important;
      border-bottom: 3px solid #DA1A20;
      box-shadow: 0 16px 24px rgba(0,0,0,0.25);
      z-index: 40;
      max-height: 80vh;
      overflow-y: auto;
    }
    .nav-toggle-checkbox:checked ~ .main-nav { display: flex !important; }
    .main-nav a {
      width: 100% !important;
      box-sizing: border-box !important;
      padding: 13px 4px !important;
      border-bottom: 1px solid rgba(255,255,255,0.1) !important;
      margin-left: 0 !important;
    }
    .main-nav a[href$="/quote/"] {
      margin: 12px 0 4px !important;
      text-align: center !important;
      border-bottom: none !important;
    }
    .breadcrumb-row { padding: 12px 20px !important; }
    .hero-section { padding: 40px 20px 8px !important; }
    .locations-section { padding: 28px 20px 64px !important; gap: 18px !important; }
    .location-card-grid { grid-template-columns: 1fr !important; }
    .location-sidebar { border-right: none !important; border-bottom: 1px solid #E3E3E8 !important; padding: 24px 22px !important; }
    .location-chips-wrap { padding: 22px !important; }
    .location-chips { grid-template-columns: repeat(3, minmax(0, 1fr)) !important; }
    .cta-inner { flex-direction: column !important; align-items: flex-start !important; padding: 40px 20px !important; gap: 18px !important; }
    .footer-grid { grid-template-columns: 1fr !important; gap: 40px !important; padding: 48px 20px 0 !important; }
    .footer-contact-col { align-items: center !important; text-align: center !important; }
    .footer-quote-btn { align-self: center !important; }
    .footer-badges { justify-content: center !important; }
    .footer-bottom-row { padding: 32px 20px 16px !important; flex-wrap: wrap !important; justify-content: center !important; gap: 16px !important; }
  }
  @media (max-width: 640px) {
    .location-chips { grid-template-columns: repeat(2, minmax(0, 1fr)) !important; gap: 8px !important; }
    .location-chips a { padding: 12px 10px !important; font-size: 13.5px !important; text-align: center !important; }
    .location-chips a:last-child { grid-column: 1 / -1 !important; }
    .footer-logo { height: 90px !important; }
  }
</style>
<div id="sbl-embed">
  <section class="hero-section" style="width: 100%; padding: 72px 40px 8px; box-sizing: border-box;">
    <div style="display: inline-flex; align-items: center; gap: 10px; background: #FDF3F4; color: #DA1A20; font-size: 12px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 8px 14px; border-radius: 999px;">Global network</div>
    <h1 class="hero-title" style="font-size: 29px; line-height: 1.2; font-weight: 700; letter-spacing: normal; margin: 20px 0 0;"><span style="color: #DA1A20;">Bus Charter</span> Locations by Country &amp; City</h1>
    <p style="font-size: 16px; line-height: 1.65; color: #0D0001; margin: 20px 0 0; max-width: 72ch; text-wrap: pretty;">Charter a bus in four countries through one group of operators. Each region is run by a local team with local drivers, local accreditation, and the same best-value guarantee. Choose your country to see the cities we cover.</p>
  </section>
  <section class="locations-section" style="width: 100%; padding: 48px 40px 96px; box-sizing: border-box; display: flex; flex-direction: column; gap: 28px;">
    <article data-screen-label="Australia" class="location-card" style="border: 1px solid #E3E3E8; border-radius: 16px; overflow: hidden; background: #FFFFFF; box-shadow: 0 1px 2px rgba(31,31,39,0.05);">
      <div class="location-card-grid" style="display: grid; grid-template-columns: minmax(0, 320px) minmax(0, 1fr); align-items: stretch;">
        <div class="location-sidebar" style="background: #F4F4F6; border-right: 1px solid #E3E3E8; padding: 36px 32px; display: flex; flex-direction: column; gap: 18px;">
          <div style="display: flex; align-items: baseline; gap: 12px;">
            <span style="font-size: 12px; font-weight: 700; color: #DA1A20; letter-spacing: 0.12em;">01</span>
            <h2 style="font-size: 30px; font-weight: 700; letter-spacing: normal; margin: 0;">Australia</h2>
          </div>
          <p style="font-size: 16px; line-height: 1.6; color: #0D0001; margin: 0;">Coaches, minibuses and airport transfers in every capital and more than 1,500 regional towns.</p>
          <div style="margin-top: auto; display: flex; flex-direction: column; gap: 12px;">
            <div style="font-size: 11px; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: #8A8A96;">Powered by</div>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au" style="display: block;" class="dc-h13 logo-badge">
              <img src="https://buscharter.com.au/wp-content/uploads/2026/08/logo-buscharter-au.png" alt="BusCharter.com.au" width="134" height="64" style="height: 64px; width: auto; display: block;" />
            </a>
          </div>
        </div>
        <div class="location-chips-wrap" style="padding: 36px 32px; display: flex; flex-direction: column; justify-content: center;">
          <div class="location-chips" style="display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 10px; align-content: center;">
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-sydney/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h15">Sydney</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-melbourne/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h16">Melbourne</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-brisbane/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h17">Brisbane</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-perth/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h18">Perth</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-adelaide/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h19">Adelaide</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-canberra/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h20">Canberra</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-gold-coast/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h21">Gold Coast</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-hobart/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h22">Hobart</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-newcastle/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h23">Newcastle</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-darwin/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h24">Darwin</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-wollongong/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h25">Wollongong</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-sunshine-coast/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h26">Sunshine Coast</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-central-coast/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h27">Central Coast</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-townsville/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h28">Townsville</a>
            <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/bus-hire-launceston/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h29">Launceston</a>
          </div>
        </div>
      </div>
    </article>
    <article data-screen-label="New Zealand" class="location-card" style="border: 1px solid #E3E3E8; border-radius: 16px; overflow: hidden; background: #FFFFFF; box-shadow: 0 1px 2px rgba(31,31,39,0.05);">
      <div class="location-card-grid" style="display: grid; grid-template-columns: minmax(0, 320px) minmax(0, 1fr); align-items: stretch;">
        <div class="location-sidebar" style="background: #F4F4F6; border-right: 1px solid #E3E3E8; padding: 36px 32px; display: flex; flex-direction: column; gap: 18px;">
          <div style="display: flex; align-items: baseline; gap: 12px;">
            <span style="font-size: 12px; font-weight: 700; color: #DA1A20; letter-spacing: 0.12em;">02</span>
            <h2 style="font-size: 30px; font-weight: 700; letter-spacing: normal; margin: 0;">New Zealand</h2>
          </div>
          <p style="font-size: 16px; line-height: 1.6; color: #0D0001; margin: 0;">North and South Island charters, cruise transfers and multi-day touring with local operators.</p>
          <div style="margin-top: auto; display: flex; flex-direction: column; gap: 12px;">
            <div style="font-size: 11px; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: #8A8A96;">Powered by</div>
            <a target="_blank" rel="noopener noreferrer" href="https://bushire.co.nz" style="display: block;" class="dc-h31 logo-badge">
              <img src="https://buscharter.com.au/wp-content/uploads/2026/08/logo-bushire-nz.png" alt="BusHire.co.nz" width="128" height="84" style="height: 84px; width: auto; display: block;" />
            </a>
          </div>
        </div>
        <div class="location-chips-wrap" style="padding: 36px 32px; display: flex; flex-direction: column; justify-content: center;">
          <div class="location-chips" style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; align-content: center;">
            <a target="_blank" rel="noopener noreferrer" href="https://bushire.co.nz/bus-hire-auckland" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h33">Auckland</a>
            <a target="_blank" rel="noopener noreferrer" href="https://bushire.co.nz/bus-hire-wellington" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h34">Wellington</a>
            <a target="_blank" rel="noopener noreferrer" href="https://bushire.co.nz/bus-hire-christchurch" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h35">Christchurch</a>
            <a target="_blank" rel="noopener noreferrer" href="https://bushire.co.nz/bus-hire-queenstown" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h36">Queenstown</a>
            <a target="_blank" rel="noopener noreferrer" href="https://bushire.co.nz/bus-hire-hamilton" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h37">Hamilton</a>
            <a target="_blank" rel="noopener noreferrer" href="https://bushire.co.nz/bus-hire-tauranga" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h38">Tauranga</a>
          </div>
        </div>
      </div>
    </article>
    <article data-screen-label="Canada" class="location-card" style="border: 1px solid #E3E3E8; border-radius: 16px; overflow: hidden; background: #FFFFFF; box-shadow: 0 1px 2px rgba(31,31,39,0.05);">
      <div class="location-card-grid" style="display: grid; grid-template-columns: minmax(0, 320px) minmax(0, 1fr); align-items: stretch;">
        <div class="location-sidebar" style="background: #F4F4F6; border-right: 1px solid #E3E3E8; padding: 36px 32px; display: flex; flex-direction: column; gap: 18px;">
          <div style="display: flex; align-items: baseline; gap: 12px;">
            <span style="font-size: 12px; font-weight: 700; color: #DA1A20; letter-spacing: 0.12em;">03</span>
            <h2 style="font-size: 30px; font-weight: 700; letter-spacing: normal; margin: 0;">Canada</h2>
          </div>
          <p style="font-size: 16px; line-height: 1.6; color: #0D0001; margin: 0;">Motor coach and shuttle hire coast to coast, with winter-ready vehicles and licensed operators.</p>
          <div style="margin-top: auto; display: flex; flex-direction: column; gap: 12px;">
            <div style="font-size: 11px; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: #8A8A96;">Powered by</div>
            <a target="_blank" rel="noopener noreferrer" href="https://busbank.com" style="display: block; background: #2A2A34; border-radius: 10px; padding: 16px 20px;" class="dc-h40 logo-badge">
              <img src="https://buscharter.com.au/wp-content/uploads/2026/08/logo-busbank.png" alt="BusBank" width="196" height="48" style="height: 48px; width: auto; display: block;" />
            </a>
          </div>
        </div>
        <div class="location-chips-wrap" style="padding: 36px 32px; display: flex; flex-direction: column; justify-content: center;">
          <div class="location-chips" style="display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 10px; align-content: center;">
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/ontario/charter-bus-toronto/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h42">Toronto</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/british-columbia/vancouver-charter-bus-rentals/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h43">Vancouver</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/quebec/charter-bus-montreal/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h44">Montreal</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/alberta/charter-bus-calgary/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h45">Calgary</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/ontario/charter-bus-ottawa/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h46">Ottawa</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/alberta/charter-bus-edmonton/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h47">Edmonton</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/manitoba/charter-bus-winnipeg/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h48">Winnipeg</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/quebec/charter-bus-quebec-city/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h49">Quebec City</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/ontario/charter-bus-hamilton/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h50">Hamilton</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/british-columbia/charter-bus-victoria/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h51">Victoria</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/ontario/charter-bus-london-ontario/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h52">London</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/#ca" style="border: 1px dashed #C9C9D2; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 600; color: #6A6A78; display: block; grid-column: 1 / -1; text-align: center;" class="dc-h53">All locations</a>
          </div>
        </div>
      </div>
    </article>
    <article data-screen-label="USA" class="location-card" style="border: 1px solid #E3E3E8; border-radius: 16px; overflow: hidden; background: #FFFFFF; box-shadow: 0 1px 2px rgba(31,31,39,0.05);">
      <div class="location-card-grid" style="display: grid; grid-template-columns: minmax(0, 320px) minmax(0, 1fr); align-items: stretch;">
        <div class="location-sidebar" style="background: #F4F4F6; border-right: 1px solid #E3E3E8; padding: 36px 32px; display: flex; flex-direction: column; gap: 18px;">
          <div style="display: flex; align-items: baseline; gap: 12px;">
            <span style="font-size: 12px; font-weight: 700; color: #DA1A20; letter-spacing: 0.12em;">04</span>
            <h2 style="font-size: 30px; font-weight: 700; letter-spacing: normal; margin: 0;">USA</h2>
          </div>
          <p style="font-size: 16px; line-height: 1.6; color: #0D0001; margin: 0;">Charter buses, minibuses and event shuttles in every major US market, nationwide.</p>
          <div style="margin-top: auto; display: flex; flex-direction: column; gap: 12px;">
            <div style="font-size: 11px; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: #8A8A96;">Powered by</div>
            <a target="_blank" rel="noopener noreferrer" href="https://busbank.com" style="display: block; background: #2A2A34; border-radius: 10px; padding: 16px 20px;" class="dc-h54 logo-badge">
              <img src="https://buscharter.com.au/wp-content/uploads/2026/08/logo-busbank.png" alt="BusBank" width="196" height="48" style="height: 48px; width: auto; display: block;" />
            </a>
          </div>
        </div>
        <div class="location-chips-wrap" style="padding: 36px 32px; display: flex; flex-direction: column; justify-content: center;">
          <div class="location-chips" style="display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 10px; align-content: center;">
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/new-york/charter-bus-new-york-city/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h56">New York</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/california/charter-bus-los-angeles/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h57">Los Angeles</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/illinois/charter-bus-chicago/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h58">Chicago</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/nevada/charter-bus-las-vegas/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h59">Las Vegas</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/florida/charter-bus-orlando/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h60">Orlando</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/florida/charter-bus-miami/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h61">Miami</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/california/charter-bus-san-francisco/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h62">San Francisco</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/charter-bus-washington-dc/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h63">Washington DC</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/massachusetts/charter-bus-boston/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h64">Boston</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/texas/charter-bus-dallas/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h65">Dallas</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/georgia/charter-bus-atlanta/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h66">Atlanta</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/washington/charter-bus-seattle/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h67">Seattle</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/colorado/charter-bus-denver/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h68">Denver</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/texas/charter-bus-houston/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h69">Houston</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/arizona/charter-bus-phoenix/" style="border: 1px solid #E9E9EE; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 500; color: #0D0001; display: block;" class="dc-h70">Phoenix</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.busbank.com/service-by-location/#us" style="border: 1px dashed #C9C9D2; border-radius: 8px; padding: 13px 14px; font-size: 14px; font-weight: 600; color: #6A6A78; display: block; grid-column: 1 / -1; text-align: center;" class="dc-h71">All locations</a>
          </div>
        </div>
      </div>
    </article>
  </section>
  <section style="width: 100%; padding: 0 40px 48px; box-sizing: border-box; text-align: center;">
    <p style="font-size: 14px; margin: 0;"><a target="_blank" rel="noopener noreferrer" href="#" style="color: #8A8A96; font-weight: 500;" class="dc-h88">Learn more about our partnership with <span style="color: #DA1A20; font-weight: 600;">BusBank</span></a></p>
  </section>
  <section class="cta-section" style="background: #F4F4F6; border-top: 1px solid #E3E3E8;">
    <div class="cta-inner" style="max-width: 1280px; margin: 0 auto; padding: 56px 40px; display: flex; align-items: center; justify-content: space-between; gap: 40px;">
      <div>
        <h2 style="font-size: 28px; font-weight: 700; letter-spacing: normal; margin: 0;">Not sure which team handles your trip?</h2>
        <p style="font-size: 16px; line-height: 1.6; color: #0D0001; margin: 10px 0 0;">Send us the route and we'll pass it to the right operator in your country.</p>
      </div>
      <div style="display: flex; align-items: center; flex: none;">
        <a target="_blank" rel="noopener noreferrer" href="https://buscharter.com.au/contact-us/" style="background: #DA1A20; color: #FFFFFF; font-size: 15px; font-weight: 700; padding: 15px 28px; border-radius: 8px;" class="dc-h72">Contact us</a>
      </div>
    </div>
  </section>
</div>
HTML;
}
add_shortcode( 'bus_charter_service_by_location', 'bcsbl_render_service_by_location' );

// Once the logo images live in the Media Library, WordPress's own
// "add missing width/height + lazy-load attrs" pass on <img> tags rebuilds
// the whole tag from the attachment's own metadata, dropping our
// style="height:...;width:auto" sizing and swapping the alt text. Explicit
// width/height attributes on our <img> tags (above) satisfy WP core's
// documented skip condition for that; disabling lazy-loading attribute
// injection here is a second safety net against the same class of rewrite.
add_filter( 'wp_lazy_loading_enabled', '__return_false' );
