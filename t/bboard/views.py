from django.http import HttpResponse

def index(request):
  return HttpResponse("Здесь будет выведен список")

def dindex(request):
  return HttpResponse("Здесь будет выведен список DINDEX")