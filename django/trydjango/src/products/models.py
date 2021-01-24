from django.db import models

# Create your models here.
class Product(models.Model):
    name        = models.CharField(max_length=120)
    description = models.TextField(blank=True, null=True)
    price       = models.DecimalField(decimal_places=2, max_digits=10000)
    summary     = models.TextField(blank=True, null=False)
    featured    = models.BooleanField() # null=True, default=True
    
    # def __str__(self):
    #     return self.name