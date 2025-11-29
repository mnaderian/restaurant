<form action="{{ route('restaurants.search') }}" method="POST" class="flex gap-2 items-center">
    @csrf
    <label for="search" class="font-bold">جستجو: </label>
    <input type="text" name="keywords" id="search" class="input">
    <label for="type" class="ms-3">جستجو بر اساس: </label>
    <select name="type" id="type" class="input">
        <option value="name">نام رستوران</option>
        <option value="food_type">نوع غذا</option>
        <option value="address">آدرس</option>
    </select>
    <input type="submit" value="جستجو" class="submit">
</form>