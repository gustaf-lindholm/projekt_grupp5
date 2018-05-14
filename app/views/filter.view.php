<div class="div_filter">
    <div class="col-xs-2">Filter Results</div>
    <div class="col-xs-2">Reset Filters</div>
    <div class="col-xs-6"><strong><?php $count?>results</strong></div>
<!--Filter-->
    <select id="sort_filter" onchange="getSort()">
            <option value="">Sort By</option>
                        <option value="new">Newest</option>
                        <option value="popular">Most popular</option>
                        <option value="high">Price high to low</option>
                        <option value="low">Price low to high</option>
    </select>
<div>
<!--End of Filter-->
</div>

<div class="mobile_filter col-xs-12">
<!--Manufacturer-->
 <select id="mobile_manufacturer" onchange="getMobileManufacturer()">
    <option value="">Brand</option>
                <option value="Apple">Apple</option>
                <option value="SAMSUNG">Samsung</option>
                <option value="Sony Mobile">Sony Mobile</option>
</select>
<!--End of Manufacturer-->

<!--Subcategory-->
<select id="target_subcategory" onchange="getSubCat()">
    <option value="">Subcategory</option>
                <option value="mobile">Mobile</option>
                <option value="accessories">Accessories</option>
        </select>
<!--End of Subcategory-->

</div>
