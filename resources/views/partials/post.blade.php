<div class="w-full h-auto flex justify-center items-center mb-10">
    <div class="w-10/12 2xl:w-8/12 mx-auto border-solid border-1 border-border flex flex-col rounded-xl shadow-xl">
        <div class="w-full border-b-1 border-solid border-border px-4 py-4 text-p text-base font-bold">Nova objava</div>
        <div class="w-full border-b-1 border-solid border-border px-4 py-4 flex flex-row justify-start items-start">
            <div class="pr-5 w-2/12">
                <img class="inline object-cover w-14 h-14 rounded-full" src="https://images.pexels.com/photos/2589653/pexels-photo-2589653.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile picture"/>
            </div>
            <div class="pr-5 w-10/12">
                <form method="post" action="" class="w-full" autocomplete="off">
                    @csrf
                    <div class="w-full">
                        <label for="post"></label>
                        <textarea name="post" id="post" rows="3"  class="w-full focus:outline-none" placeholder="O čemu razmišljate?"></textarea>
                    </div>
                    <div class="w-full flex justify-end mt-5">
                        <input type="submit" class="w-1/4 px-4 py-2 bg-queen-blue font-normal text-sm tracking-wide text-white rounded-full cursor-pointer hover:bg-fiery-red focus:bg-fiery-red" value="Objavi">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
