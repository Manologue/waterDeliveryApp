<li class="search-box-outer">
    <div class="dropdown">
        <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
            <div class="form-container">
                <form action="{{ route('product.search') }}">
                    <div class="form-group">
                        <input type="search" name="q" value="" placeholder="Search...." required="">
                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</li>
