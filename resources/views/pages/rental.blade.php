@extends('layout.master')

@section('content')
    <section class="my-10">
        <div class="flex mb-6 border-b-2 border-grey-light">
            <h1 class="self-start font-semibold text-2xl border-b-2 border-blue-light -mb-2px">Gear Rental</h1>
        </div>
        <div class="flex h-full">
            <div class="flex flex-col  w-full">
                <div class="flex justify-between border-b-2 p-4 text-black font-semibold">
                    <p>Equipment</p>
                    <p>Price</p>
                </div>
                <div class="flex justify-between border-b p-3 text-grey-darkest">
                    <p>Full Gear Rental</p>
                    <p>20€</p>
                </div>
                <div class="flex justify-between border-b p-3 text-grey-darkest">
                    <p>Regulator</p>
                    <p>5€</p>
                </div>
                <div class="flex justify-between border-b p-3 text-grey-darkest">
                    <p>BCD</p>
                    <p>5€</p>
                </div>
                <div class="flex justify-between border-b p-3 text-grey-darkest">
                    <p>Wet Suit</p>
                    <p>5€</p>
                </div>
                <div class="flex justify-between p-3 text-grey-darkest">
                    <p>Mask/Snorkel/Fins</p>
                    <p>10€</p>
                </div>
            </table>
        </div>
    </section>
@endsection
