<form class="flex flex-col lg:flex-row gap-2 items-center" action="{{ route('restaurants.filter') }}" method="POST">
    @csrf
    <div>
        <label class="font-bold me-5">فیلتر: </label>
        <label for="points">امتیاز:</label>
        <select name="points" id="points" class="input">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <label for="price">قیمت:</label>
        <input type="number" id="price" name="price" class="input">
    </div>
    <div>
        <label for="food_type">نوع غذا:</label>
        <select name="food_type" id="food_type" class="input">
            <option value="غذای ایرانی">غذای ایرانی</option>
            <option value="فست فود">فست فود</option>
        </select>
        <input type="checkbox" id="external_environment" name="external_environment">
        <label for="external_environment">محیط خارجی</label>
        <input type="checkbox" name="internal_environment" id="internal_environment">
        <label for="internal_environment" id="internal_environment" name="internal_environment">محیط داخلی</label>
    </div>
    <div>
        <input type="submit" value="اعمال فیلتر" class="submit bg-emerald-700">
    </div>
</form>