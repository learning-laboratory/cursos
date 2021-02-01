"""trydjango URL Configuration

The `urlpatterns` list routes URLs to  For more information please see:
    https://docs.djangoproject.com/en/3.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path

from products.views import *
from pages.views import *

urlpatterns = [
    path('admin/', admin.site.urls),

    path('', home_view, name="home"),
    path('contact', contact_view, name="contact"),
    path('about', about_view, name="about"),
    path('social', social_view, name="social"),

    path('product', product_detail_view, name="product_detail"),
    path('product/create', product_create_view, name="product_create"),
    path('product/render', render_initial_data, name="product_render"),
    path('product/<int:product_id>/', dynamic_lookup_view, name="product_show"),
    path('product/<int:product_id>/delete', product_delete_view, name="product_delete"),
    path('products/', product_list_view, name="product_list")

]
