<div class="modal fixed h-screen pin-t w-full justify-center items-center items-start p-6 flex-col hidden opacity-0" id="modal-{{$modalId}}">


    <div class="course-modal flex flex-col bg-white w-full max-h-full antialiased text-grey-darker md:w-2/3 lg:w-2/5">
        <header class="bg-blue-light text-white flex justify-between items-center p-4">
            <h2 class="uppercase text-sm font-bold">
                {{$course}}
            </h2>
            <div class="close-modal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="h-4 w-4 hover:text-grey-light fill-current cursor-pointer">
                    <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
                </svg>
            </div>
        </header>

        <div class="flex flex-col">
            <div class="flex text-grey-dark text-xs border-b p-6 mb-4 items-center justify-between">
                <div class="flex flex-col items-center">
                    <h3>Duration</h3>
                    <p class="tracking-wide italic mt-2">
                        {{$duration}}
                    </p>
                </div>

                <div class="flex flex-col items-center">
                    <h3>Equipment</h3>
                    <p class="mt-2">
                        {{$equipment}}
                    </p>
                </div>

                <div class="flex flex-col items-center">
                    <h3>Age</h3>
                    <p class="mt-2">
                        {{$age}}
                    </p>
                </div>
            </div>

            <div class="text-sm leading-loose p-6 overflow-auto">
                <h3 class="mb-2">Description</h3>

                {{$description}}
            </div>

            <button class="mt-4 py-6 flex w-full justify-center uppercase text-green border-t hover:bg-green-light hover:text-white font-semibold tracking-wide focus:outline-none">Contact Us</button>
        </div>

    </div>

</div>
