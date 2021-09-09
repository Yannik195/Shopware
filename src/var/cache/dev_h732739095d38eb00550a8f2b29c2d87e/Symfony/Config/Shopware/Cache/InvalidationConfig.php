<?php

namespace Symfony\Config\Shopware\Cache;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class InvalidationConfig 
{
    private $delay;
    private $count;
    private $httpCache;
    private $productListingRoute;
    private $productDetailRoute;
    private $productSearchRoute;
    private $productSuggestRoute;
    private $productCrossSellingRoute;
    private $paymentMethodRoute;
    private $shippingMethodRoute;
    private $navigationRoute;
    private $categoryRoute;
    private $landingPageRoute;
    private $languageRoute;
    private $currencyRoute;
    private $countryRoute;
    private $salutationRoute;
    private $productReviewRoute;
    private $sitemapRoute;
    
    /**
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function delay($value): self
    {
        $this->delay = $value;
    
        return $this;
    }
    
    /**
     * @default 150
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function count($value): self
    {
        $this->count = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function httpCache($value): self
    {
        $this->httpCache = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productListingRoute($value): self
    {
        $this->productListingRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productDetailRoute($value): self
    {
        $this->productDetailRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productSearchRoute($value): self
    {
        $this->productSearchRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productSuggestRoute($value): self
    {
        $this->productSuggestRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productCrossSellingRoute($value): self
    {
        $this->productCrossSellingRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function paymentMethodRoute($value): self
    {
        $this->paymentMethodRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function shippingMethodRoute($value): self
    {
        $this->shippingMethodRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function navigationRoute($value): self
    {
        $this->navigationRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function categoryRoute($value): self
    {
        $this->categoryRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function landingPageRoute($value): self
    {
        $this->landingPageRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function languageRoute($value): self
    {
        $this->languageRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function currencyRoute($value): self
    {
        $this->currencyRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function countryRoute($value): self
    {
        $this->countryRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function salutationRoute($value): self
    {
        $this->salutationRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productReviewRoute($value): self
    {
        $this->productReviewRoute = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function sitemapRoute($value): self
    {
        $this->sitemapRoute = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['delay'])) {
            $this->delay = $value['delay'];
            unset($value['delay']);
        }
    
        if (isset($value['count'])) {
            $this->count = $value['count'];
            unset($value['count']);
        }
    
        if (isset($value['http_cache'])) {
            $this->httpCache = $value['http_cache'];
            unset($value['http_cache']);
        }
    
        if (isset($value['product_listing_route'])) {
            $this->productListingRoute = $value['product_listing_route'];
            unset($value['product_listing_route']);
        }
    
        if (isset($value['product_detail_route'])) {
            $this->productDetailRoute = $value['product_detail_route'];
            unset($value['product_detail_route']);
        }
    
        if (isset($value['product_search_route'])) {
            $this->productSearchRoute = $value['product_search_route'];
            unset($value['product_search_route']);
        }
    
        if (isset($value['product_suggest_route'])) {
            $this->productSuggestRoute = $value['product_suggest_route'];
            unset($value['product_suggest_route']);
        }
    
        if (isset($value['product_cross_selling_route'])) {
            $this->productCrossSellingRoute = $value['product_cross_selling_route'];
            unset($value['product_cross_selling_route']);
        }
    
        if (isset($value['payment_method_route'])) {
            $this->paymentMethodRoute = $value['payment_method_route'];
            unset($value['payment_method_route']);
        }
    
        if (isset($value['shipping_method_route'])) {
            $this->shippingMethodRoute = $value['shipping_method_route'];
            unset($value['shipping_method_route']);
        }
    
        if (isset($value['navigation_route'])) {
            $this->navigationRoute = $value['navigation_route'];
            unset($value['navigation_route']);
        }
    
        if (isset($value['category_route'])) {
            $this->categoryRoute = $value['category_route'];
            unset($value['category_route']);
        }
    
        if (isset($value['landing_page_route'])) {
            $this->landingPageRoute = $value['landing_page_route'];
            unset($value['landing_page_route']);
        }
    
        if (isset($value['language_route'])) {
            $this->languageRoute = $value['language_route'];
            unset($value['language_route']);
        }
    
        if (isset($value['currency_route'])) {
            $this->currencyRoute = $value['currency_route'];
            unset($value['currency_route']);
        }
    
        if (isset($value['country_route'])) {
            $this->countryRoute = $value['country_route'];
            unset($value['country_route']);
        }
    
        if (isset($value['salutation_route'])) {
            $this->salutationRoute = $value['salutation_route'];
            unset($value['salutation_route']);
        }
    
        if (isset($value['product_review_route'])) {
            $this->productReviewRoute = $value['product_review_route'];
            unset($value['product_review_route']);
        }
    
        if (isset($value['sitemap_route'])) {
            $this->sitemapRoute = $value['sitemap_route'];
            unset($value['sitemap_route']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->delay) {
            $output['delay'] = $this->delay;
        }
        if (null !== $this->count) {
            $output['count'] = $this->count;
        }
        if (null !== $this->httpCache) {
            $output['http_cache'] = $this->httpCache;
        }
        if (null !== $this->productListingRoute) {
            $output['product_listing_route'] = $this->productListingRoute;
        }
        if (null !== $this->productDetailRoute) {
            $output['product_detail_route'] = $this->productDetailRoute;
        }
        if (null !== $this->productSearchRoute) {
            $output['product_search_route'] = $this->productSearchRoute;
        }
        if (null !== $this->productSuggestRoute) {
            $output['product_suggest_route'] = $this->productSuggestRoute;
        }
        if (null !== $this->productCrossSellingRoute) {
            $output['product_cross_selling_route'] = $this->productCrossSellingRoute;
        }
        if (null !== $this->paymentMethodRoute) {
            $output['payment_method_route'] = $this->paymentMethodRoute;
        }
        if (null !== $this->shippingMethodRoute) {
            $output['shipping_method_route'] = $this->shippingMethodRoute;
        }
        if (null !== $this->navigationRoute) {
            $output['navigation_route'] = $this->navigationRoute;
        }
        if (null !== $this->categoryRoute) {
            $output['category_route'] = $this->categoryRoute;
        }
        if (null !== $this->landingPageRoute) {
            $output['landing_page_route'] = $this->landingPageRoute;
        }
        if (null !== $this->languageRoute) {
            $output['language_route'] = $this->languageRoute;
        }
        if (null !== $this->currencyRoute) {
            $output['currency_route'] = $this->currencyRoute;
        }
        if (null !== $this->countryRoute) {
            $output['country_route'] = $this->countryRoute;
        }
        if (null !== $this->salutationRoute) {
            $output['salutation_route'] = $this->salutationRoute;
        }
        if (null !== $this->productReviewRoute) {
            $output['product_review_route'] = $this->productReviewRoute;
        }
        if (null !== $this->sitemapRoute) {
            $output['sitemap_route'] = $this->sitemapRoute;
        }
    
        return $output;
    }
    

}
