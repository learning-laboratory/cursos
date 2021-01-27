from django import forms
from .models import Product

class ProductForm(forms.ModelForm):

    class Meta:
        model = Product
        fields = [
            'name',
            'price',
            'description',
            'summary',
            'featured'
        ]

class RawProductForm(forms.Form):

    name = forms.CharField(
        label="Name:",
        widget = forms.TextInput(
            attrs = {
                "placeholder": "Title Here!",
            }
        )
    )

    description = forms.CharField(
        label="Description:", 
        required=False,
        widget = forms.Textarea(
            attrs = {
                "placeholder": "Descritptio Here!",
                "class":"form-control",
                "id":"id-class",
                "rows": 5,
                "cols": 16
            }
        )

    )
    price = forms.DecimalField(label="Price:", initial=10.00)