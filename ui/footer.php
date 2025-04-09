<?php
// footer.php
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$dashboard_url = $base_url . '/vidhub/dashboard/';
$root_url = $base_url . '/vidhub/';
?>
<footer class="footer">
    <div class="footer-bottom">
        <div class="footer-bottom-content">
            <p>&copy; <?php echo date('Y'); ?> VIDHUB Streaming Software. All rights reserved.</p>
            <div class="footer-links">
                <a href="<?php echo $dashboard_url; ?>privacy_policy/">Privacy</a>
                <span>|</span>
                <a href="<?php echo $dashboard_url; ?>terms_conditions/">Terms</a>
                <span>|</span>
                <a href="<?php echo $dashboard_url; ?>copyright/">Copyright</a>
            </div>
        </div>
    </div>
</footer>

<style>
/* Footer Styles */
.footer {
    background-color: transparent;
    color: #333;
    padding: 40px 0 0;
    margin-top: 40px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.footer-col {
    width: 23%;
    padding: 0 15px;
    margin-bottom: 30px;
}

.footer-col h4 {
    font-size: 18px;
    margin-bottom: 20px;
    position: relative;
}

.footer-col h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #ff4757;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

.footer-col ul {
    list-style: none;
    padding: 0;
}

.footer-col ul li {
    margin-bottom: 10px;
}

.footer-col ul li a {
    color: #333;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-col ul li a:hover {
    color: #ffffff;
    padding-left: 5px;
}

.social-links {
    margin-top: 20px;
}

.social-links a {
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255, 255, 255, 0.1);
    margin-right: 10px;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.3s ease;
}

.social-links a:hover {
    background-color: #ff4757;
    transform: translateY(-3px);
}

.newsletter {
    margin-top: 20px;
}

.newsletter p {
    color: #333;
    margin-bottom: 10px;
}

.newsletter-form input {
    width: 100%;
    padding: 10px;
    border: none;
    background: #333;
    color: #fff;
    margin-bottom: 10px;
    border-radius: 4px;
}

.newsletter-form button {
    background: #ff4757;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.newsletter-form button:hover {
    background: #ff6b81;
}

.footer-bottom {
    background-color: transparent;
    padding: 20px 0;
    text-align: center;
}

.footer-bottom-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.footer-bottom p {
    color: #333;
    font-size: 14px;
    margin: 0;
}

.footer-links a {
    color: #333;
    text-decoration: none;
    margin: 0 5px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.footer-links a:hover {
    color: #ff4757;
}

.footer-links span {
    color: #333;
}

/* Responsive footer */
@media (max-width: 768px) {
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
    
    .footer-bottom-content {
        flex-direction: column;
    }
    
    .footer-bottom p {
        margin-bottom: 10px;
    }
}

@media (max-width: 480px) {
    .footer-col {
        width: 100%;
    }
}
</style>