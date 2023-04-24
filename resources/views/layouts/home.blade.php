<!DOCTYPE html>
<html>

<head>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <div class="h-16 w-full bg-black">
        <div class="w-full h-full flex justify-center items-center">
            <div
                class="flex h-full items-center ">
                <div class="mx-4 text-white">Home</div>
                <div class=" h-8 w-px bg-gray-300"></div>
            </div>
            <div class="flex h-full items-center ">
                <div class="mx-4 text-white">Actus</div>
                <div class=" h-8 w-px bg-gray-300"></div>
            </div>
            <div class="flex h-full items-center ">
                <div class="mx-4 text-white">Add</div>
            </div> 
        </div>

        @include('layouts.actus')

    </div>

</head>