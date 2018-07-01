@extends('layout.master')

@section('content')
    {{-- Courses list --}}
    <div class="flex mb-6 mt-10 border-b-2 border-grey-light">
            <h1 class="self-start font-semibold text-2xl border-b-2 border-blue-light -mb-2px">Diving Courses</h1>
        </div>
    <main class="flex flex-wrap justify-center my-8">


        {{-- Course Cards --}}
        @courseCard
            @slot('img')
                diver
            @endslot

            @slot('course')
                Bubblemaker
            @endslot

            @slot('price')
                40
            @endslot

            @slot('modalId')
                01
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                scuba
            @endslot

            @slot('course')
                Discover Scuba Diving
            @endslot

            @slot('price')
                120
            @endslot


            @slot('modalId')
                02
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                ocean
            @endslot

            @slot('course')
                Advanced Open Water
            @endslot

            @slot('price')
                320
            @endslot

            @slot('modalId')
                03
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                sea
            @endslot

            @slot('course')
                Rescue Diver
            @endslot

            @slot('price')
                400
            @endslot

            @slot('modalId')
                04
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                oceanic
            @endslot

            @slot('course')
                Dive Master
            @endslot

            @slot('price')
                800
            @endslot

            @slot('modalId')
                05
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                diver
            @endslot

            @slot('course')
                Enriched Air
            @endslot

            @slot('price')
                125
            @endslot

            @slot('modalId')
                06
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                underwater
            @endslot

            @slot('course')
                Emergency First Response
            @endslot

            @slot('price')
                125
            @endslot

            @slot('modalId')
                07
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                shore
            @endslot

            @slot('course')
                Tec Gas Blender Nitrox
            @endslot

            @slot('price')
                250
            @endslot

            @slot('modalId')
                08
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                coastal
            @endslot

            @slot('course')
                Tec Gas Blender Trimix
            @endslot

            @slot('price')
                325
            @endslot

            @slot('modalId')
                09
            @endslot
        @endcourseCard



        {{-- Course Modals --}}
        @courseModal
            @slot('modalId')
                01
            @endslot

            @slot('course')
                Bubblemaker
            @endslot

            @slot('duration')
                1.5h
            @endslot

            @slot('equipment')
                Included
            @endslot

            @slot('age')
                18 +
            @endslot

            @slot('description')
                <p class="mb-4">
                    Bubblemaker is as fun as it sounds – a chance for kids to blow bubbles by scuba diving. Children who are at least 8 years old can use scuba gear to breathe underwater and swim around in shallow water. Have a party or celebrate a birthday by throwing a memorable, exciting Bubblemaker event with friends and family at OCEAN RESPECT - ecodive center! Enjoy up to two hours in the pool learning the basics of scuba diving with a dive professional!
                </p>
                <p class="mb-4">
                    Beginning with an introduction session on the poolside, you'll move on into the pool and will have heaps of fun as you get used to all the equipment and learn how to move around and breathe underwater. You'll quickly gain confidence and will be hooked for life once you try out this fast-growing and exciting sport!
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                02
            @endslot

            @slot('course')
                Discover Scuba Diving
            @endslot

            @slot('duration')
                2-5h
            @endslot

            @slot('equipment')
                Included
            @endslot

            @slot('age')
                10 +
            @endslot

            @slot('description')
                <p class="mb-4">
                    Have you always wondered what it’s like to breathe underwater? If you want to try scuba diving, but aren’t quite ready to take the plunge into a certification course, Discover Scuba Diving is for you. While not a scuba certification course, Discover Scuba Diving is a quick and easy introduction to what it takes to explore the underwater world.
                </p>
                <p class="mb-4">
                    To sign up for a PADI Discover Scuba Diving experience, no prior experience with scuba diving is necessary, but you need to be in reasonable physical health.
                </p>
                <p class="mb-4">
                    You learn the basic safety guidelines and skills needed to dive under the direct supervision of a PADI Professional. If you make an open water dive, you’ll practice a few more skills in shallow water to prepare for your adventure. Get ready to:

                    <ul>
                        <li class="mb-2">Go over the scuba equipment you use to dive and how easy it is to move around underwater with your gear.</li>
                        <li class="mb-2">Find out what it’s like to breathe underwater.</li>
                        <li class="mb-2">Learn key skills that you’ll use during every scuba dive.</li>
                        <li class="mb-2">Have fun swimming around and exploring.</li>
                        <li class="mb-2">Hear about becoming a certified diver through the PADI Open Water Diver course.</li>
                    </ul>
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                03
            @endslot

            @slot('course')
                Advanced Open Water
            @endslot

            @slot('duration')
                2 days
            @endslot

            @slot('equipment')
                Included
            @endslot

            @slot('age')
                12 +
            @endslot

            @slot('description')
                <p class="mb-4">
                    That’s what the PADI Advanced Open Water Diver course is all about. You don’t have to be “advanced” to take it – it’s designed to advance your diving, so you can start right after earning your PADI Open Water Diver certification. The course helps build confidence and expand your scuba skills through different Adventure Dives. You try out different specialties while gaining experience under the supervision of your PADI Instructor. You log dives and develop capabilities as you find new ways to have fun scuba diving.
                </p>
                <p class="mb-4">
                    Get credit! Each Adventure Dive may credit toward the first dive of the corresponding PADI Specialty Diver Course. If you’ve already taken a specialty diver course, ask your instructor if you’ve earned credit for an Adventure Dive.
                </p>
                <p class="mb-4">
                    PADI (Junior) Open Water Divers who are at least 12 years old are ready to step up and enroll in an Advanced Open Water Diver course. Young divers may only participate in certain Adventures Dives – check with your PADI Instructor.
                </p>
                <p class="mb-4">
                    If you’re already an Adventure Diver, you only need to complete two more Adventure Dives to earn the Advanced Open Water Diver certification.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                04
            @endslot

            @slot('course')
                Rescue Diver
            @endslot

            @slot('duration')
                2 days
            @endslot

            @slot('equipment')
                Included
            @endslot

            @slot('age')
                12 +
            @endslot

            @slot('description')
                <p class="mb-4">
                    Scuba divers describe the PADI Rescue Diver course as the most challenging, yet most rewarding course they’ve ever taken. Why? Because you learn to prevent and manage problems in the water, and become more confident in your skills as a diver, knowing that you can help others if needed. During the course, you learn to become a better buddy by practicing problem solving skills until they become second nature. Plus, the course is just fun – it’s serious, but still allows for lots of laughter in between the focused learning.
                </p>
                <p class="mb-4">
                    PADI (Junior) Adventure Divers who are at least 12 years old and have completed the Underwater Navigation Adventure Dive may enroll in a Rescue Diver course. You also need to have Emergency First Response Primary and Secondary Care (CPR and First Aid) training within the past 24 months. You can complete this training during the Rescue Diver course. Your instructor may also offer the PADI Emergency Oxygen Provider specialty diver course at the same time.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                05
            @endslot

            @slot('course')
                Dive Master
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                Included
            @endslot

            @slot('age')
                12 +
            @endslot

            @slot('description')
                <p class="mb-4">
                    Love scuba diving? Want to share it with others on a whole new level? Take the PADI Divemaster course and do what you love to do as a career. Scuba divers look up to divemasters because they are leaders who mentor and motivate others. As a divemaster, you not only get to dive a lot, but also experience the joy of seeing others have as much fun diving as you do.
                </p>
                <p class="mb-4">
                    The PADI Divemaster course is your first level of professional training. Working closely with a PADI Instructor, you’ll fine-tune your dive skills, like perfecting the effortless hover, and refine your rescue skills so you anticipate and easily solve common problems. You’ll gain dive knowledge, management and supervision abilities so you become a role model to divers everywhere.
                </p>
                <p class="mb-4">
                    As a PADI Divemaster, you’ll lead others as you supervise scuba diving activities and assist with diver training. Whether you want to work at a faraway dive destination or close to home at a local dive shop, the adventure of a lifetime awaits you. PADI Divemasters are respected dive professionals who are aligned with the largest and most respected dive organization in the world – PADI.
                </p>
                <p class="mb-4">
                    PADI Rescue Divers who are at least 18 years old may enroll in the PADI Divemaster course. You also need to have:
                    <ul class="my-4">
                        <li class="mb-2">
                            Emergency First Response Primary and Secondary Care (CPR and First Aid) training within the past 24 months.
                        </li>
                        <li class="mb-2">
                            A medical statement signed by a physician within the last 12 months.
                        </li>
                        <li class="mb-2">
                            At least 40 logged dives to begin the course and 60 dives to earn certification.
                        </li>
                    </ul>
                </p>
                <p class="mb-4">
                    Note that qualifying certifications from other diver training organization may apply – ask your PADI Instructor.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                06
            @endslot

            @slot('course')
                Enriched Air
            @endslot

            @slot('duration')
                1 day
            @endslot

            @slot('equipment')
                Included
            @endslot

            @slot('age')
                12 +
            @endslot

            @slot('description')
                <p class="mb-4">
                    The PADI Enriched Air Diver course is PADI’s most popular specialty scuba course. Why? Because scuba diving with enriched air nitrox gives you more no decompression time, especially on repetitive scuba dives. If staying down longer and getting back in the water sooner sounds appealing, then don’t hesitate to become an enriched air diver.
                </p>
                <p class="mb-4">
                    If you’re a PADI (Junior) Open Water Diver who is at least 12 years old, you can enroll in the Enriched Air Diver Specialty course. Note that in some regions the minimum age is older than 12.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                07
            @endslot

            @slot('course')
                Emergency First Response
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                Included
            @endslot

            @slot('age')
                12 +
            @endslot

            @slot('description')
                <p class="mb-4">
                    Emergency First Response training focuses on building confidence in lay rescuers and increasing their willingness to respond when faced with a medical emergency. Course participants learn simple to follow steps for emergency care and practice applying skills in a nonstressful learning environment. All courses are supported by self-study manuals, videos and quick reference cards to enhance learning and allow you start learning right away.
                </p>
                <p class="mb-4">
                    EFR courses meet the CPR and first aid training requirements for the PADI Rescue Diver course and all professional-level ratings. Most PADI Instructors are also Emergency First Response Instructors.
                </p>
                <p class="mb-4">
                    The following EFR courses are based on internationally recognized medical guidelines for emergency care.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                08
            @endslot

            @slot('course')
                Tec Gas Blender Nitrox
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                ?
            @endslot

            @slot('age')
                ?
            @endslot

            @slot('description')
                <p class="mb-4">
                    The PADI Enriched Air Diver course is the most popular diver specialty course and the number of technical divers is on the rise, which means that lots of scuba divers want enriched air and gas blends. The Tec Gas Blender course teaches you to blend enriched air nitrox and helium-blend gases using one or more blending methods. Being the blender is a key job at a busy PADI Dive Center or Resort and your work allows other divers to do what they love to do – scuba dive.
                </p>
                <p class="mb-4">
                    If you’re a PADI Enriched Air Diver and are at least 18 years old, you can enroll in a Tec Gas Blender course.
                </p>
                <p class="mb-4">
                    Note that qualifying certifications from other diver training organizations may apply – ask your Tec Gas Blender Instructor.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                09
            @endslot

            @slot('course')
                Tec Gas Blender Trimix
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                ?
            @endslot

            @slot('age')
                ?
            @endslot

            @slot('description')
                <p class="mb-4">
                    Ready for the outer edge of technical diving? The Tec Trimix Diver course takes experienced tec divers and turns them into extreme divers who go deeper and visit pristine sites where few others will ever go. During the course, you’ll make dives as deep as 90 metres/300 feet, but once you earn this tough certification, there are few limits. Your training teaches you to build experience gradually and you do it because you’ve made it this far and have more exploring to do.
                </p>
                <p class="mb-4">
                    To enroll in the Tec Trimix Diver course, you must:

                    <ul class="my-4">
                        <li class="mb-2">Be a PADI Tec 50 diver or Tec Trimix 65 diver</li>
                        <li class="mb-2">Have a minimum of 150 logged dives</li>
                        <li class="mb-2">Are at least 18 years old</li>
                        <li class="mb-2">Have a Medical Statement signed by a physician within the last 12 months</li>
                    </ul>
                </p>
                <p class="mb-4">
                    Note that qualifying certifications from other diver training organizations may apply – ask your Tec Trimix Instructor.
                </p>
            @endslot
        @endcourseModal
    </main>

@endsection






@section('script')
<script>

    const cardBtns = document.querySelectorAll('.card-btn');
    const modalCloseButton = document.querySelectorAll('.close-modal');
    const modalContainers = document.querySelectorAll('.modal');

    cardBtns.forEach(button => {

        const modalId = button.dataset.modal;

        button.addEventListener('click', (e) => {

            e.preventDefault();

            const modal = document.querySelector(`#${modalId}`);

            modal.classList.remove('hidden');
            modal.classList.add('flex');

            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.classList.add('opacity-1');
            }, 10);

        });
    });


    modalCloseButton.forEach(button => {
        button.addEventListener('click', (e) => {

            const modal = e.currentTarget.parentElement.parentElement.parentElement;

            modal.classList.add('opacity-0');
            modal.classList.remove('opacity-1');

            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }, 200);

        });
    });

    modalContainers.forEach(modalContainer => {
        modalContainer.addEventListener('click', (e) => {

            if(e.currentTarget == e.target) {
                const container = e.currentTarget;

                container.classList.add('opacity-0');
                container.classList.remove('opacity-1');

                setTimeout(() => {
                    container.classList.remove('flex');
                    container.classList.add('hidden');
                }, 200);

            }
        });
    });


</script>
@endsection
