@extends('layout.client')
@section('content')
<section class="py-8 p-4 pt-0 mt-20 antialiased overflow-hidden bg-primary"> 
        <!-- Blog Cards -->
        <div class="max-w-7xl mx-auto ">
            <div class="grid gap-6 lg:grid-cols-3">
                <!-- Card 1 -->
                <a href="{{url('/tips/1')}}">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden ">
                        <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1534872850130-5355701fcc89?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=4800" alt="Blog Image">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2 hover:text-blue-600 hover:cursor-pointer line-clamp-1">
                                The Health Benefits of Going to the Gym
                            </h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            Going to the gym has become an integral part of a healthy lifestyle for many people, and for good reason. Regular exercise, whether strength training, cardio, or flexibility exercises, has been shown to offer numerous health benefits, improving both physical and mental well-being. Below are some of the ways that going to the gym can enhance your health.
                            </p> 
                        </div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="{{url('/tips/2')}}">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=4800" alt="Blog Image">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2 hover:text-blue-600 hover:cursor-pointer line-clamp-1">
                                How to Exercise at Home: A Complete Guide    
                            </h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Exercising at home has become increasingly popular due to its convenience and flexibility. With no need for a gym membership or special equipment, home workouts allow you to stay fit without leaving the comfort of your own space. Whether you're looking to build strength, improve flexibility, or simply stay active, here’s how you can create an effective exercise routine at home.
                            </p> 
                        </div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="{{url('/tips/3')}}">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img class="w-full h-48 object-cover" src="https://demo.ajufbox.com/solit/assets/images/blog/blog-2.jpg" alt="Blog Image">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2 hover:text-blue-600 hover:cursor-pointer hover:">
                                Exploring the Future Cutting-Edge
                                Technologies</h3>
                            <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Fuga accusantium dolore autem saepe. </p> 
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
