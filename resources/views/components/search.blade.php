<form action="{{ route('search') }}" method="POST" class="flex gap-2 items-center">
    @csrf
    <label for="search">جستجو: </label>
    <input type="text" name="keywords" id="search" class="bg-white border border-gray-200 rounded-lg py-1 px-2">
    <label for="type" class="ms-3">جستجو بر اساس: </label>
    <select name="type" id="type" class="bg-white border border-gray-200 rounded-lg py-1 px-2">
        <option value="name">نام رستوران</option>
        <option value="food_type">نوع غذا</option>
        <option value="address">آدرس</option>
    </select>
    <input type="submit" value="جستجو" class="bg-red-700 text-white rounded-xl font-medium py-1 px-3 mr-5 hover:bg-red-600">
</form>