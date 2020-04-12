<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="post">
        @csrf
                <textarea name="body"
                          class="w-full" placeholder="Whats up doc?" ></textarea>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img src="https://i.pravatar.cc/40" class="rounded-full mr-3" alt="">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-sm rounded-lg shadow py-2 px-2 text-white">Tweet a roo!</button>

        </footer>
    </form>
    @error('body')
    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror
</div>