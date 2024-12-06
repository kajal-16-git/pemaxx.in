<?php include_once('header.php'); ?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f0f4f8;
    }

    .currency-trading-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 50px;
        background-color: #f0f4f8;
        margin-bottom: 50px;
    }

    .graphic img {
        width: 100%;
        height: auto;
    }

    .content h1 {
        font-size: 36px;
        color: #000;
        margin-bottom: 20px;
    }

    .content p {
        font-size: 18px;
        color: #333;
        margin-bottom: 30px;
    }

    .cta-button {
        padding: 15px 30px;
        background-color: #0052ff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .cta-button:hover {
        background-color: #003bb5;
    }

    @media (max-width: 768px) {
        .currency-trading-section {
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .content h1 {
            font-size: 28px;
        }

        .content p {
            font-size: 16px;
        }
    }

    .cards-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .card {
        background-color: #f0f4ff;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card h3 {
        font-size: 1.2em;
        margin-bottom: 10px;
        color: #000;
    }

    .card p {
        font-size: 0.9em;
        margin-bottom: 15px;
        color: #555;
    }

    .card img {
        max-width: 60px;
        margin-top: 10px;
    }

</style>

<br>

<section class="currency-trading-section container">
    <div class="graphic col-md-6 col-12">
        <img src="assets/images/bg/intro-bg.jpg" alt="Currency Graphic">
    </div>
    <div class="content col-md-6 col-12">
        <h1>Currency trading made clear for everyone</h1>
        <p>Trade currency pairs with Octa and enjoy tight spreads, high leverage, and free trading ideas</p>
        <a href="#" class="cta-button">Start Trading</a>
    </div>
</section>

<br><br><br><br><br>
<section class="container">
<h4>Why Octa is the best choice on the currency market</h4>
<div class="cards-container container">

    <div class="card">
        <h3>Stable spreads from 0.6 pips</h3>
        <p>Among the lowest on the market</p>
        <img src="your-image1.png" alt="Spreads Icon">
    </div>
    <div class="card">
        <h3>All 7 major pairs and 28 others</h3>
        <img src="your-image2.png" alt="Pairs Icon">
    </div>
    <div class="card">
        <h3>No fees, no commissions, and no swaps</h3>
        <img src="your-image3.png" alt="Zero Percent Icon">
    </div>
    <div class="card">
        <h3>Order execution in under 0.1 seconds</h3>
        <img src="your-image4.png" alt="Execution Icon">
    </div>
    <div class="card">
        <h3>Leverage up to 1:1000</h3>
        <p>For most FX pairs</p>
        <img src="your-image5.png" alt="Leverage Icon">
    </div>
    <div class="card">
        <h3>Low entry threshold</h3>
        <p>Start with 25 USD and trade from 0.01 lots</p>
        <img src="your-image6.png" alt="Entry Threshold Icon">
    </div>
</div>
</section>

<?php include_once('footer.php'); ?>
