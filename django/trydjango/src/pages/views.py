from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def home_view(request, *args, **kwargs):
    print(args, kwargs)
    print(request.user)
    # return HttpResponse(f"<h1>Hello World!</h1>{request.user}")
    return render(request, "home.html", {})

def contact_view(request, *args, **kwargs):
    return render(request, "contact.html", {})

def about_view(request, *args, **kwargs):
    context = {
        'text': 'This is about us',
        'number': 123,
        'list': [1,2,3,4,5]
    }
    return render(request, "about.html", context)

def social_view(request, *args, **kwargs):
    return render(request, "social.html", {})