<div class="fl-cart-contain">
    <div class="mini-cart">
        <div class="basket"><a><span id="full_count"> <?=en_to_fa(isset($_SESSION['cart']['full_count']) ? $_SESSION['cart']['full_count'] : 0)?> </span></a></div>
        <div class="fl-mini-cart-content" style="display: none;">
<!--            <div class="block-subtitle">-->
<!--                <div class="top-subtotal">2 items, <span class="price">$259.99</span></div>-->
<!--            </div>-->
            <ul class="mini-products-list" id="top-cart">
                <?=getCart($_SESSION)?>
            </ul>
        </div>
    </div>
</div>
