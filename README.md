
# IP Blacklist Firewall Updater 

Very simple IP Blacklist generator for your Firewall (e.g. Pfsense, OPNsense etc.)




## INSTALLATION

To deploy this project you just need Apache or NGINX and PHP (I used 7.4)

Make sure you change your php.ini like this

```bash
allow_url_fopen=1
```

You can change the lists as you prefer by adding/removing items from the array


## FEATURES

- Exports more than 20k entries in less than 10 sec (locally hosted with XAMPP/UwAmp)
- Simple usage, just open the .php page and the txt file will be exported

Why I made this?

Personal need. Upon request I can make changes to integrate it with Mikrotik or other Firewalls



## LICENSE



[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

MIT License

Copyright (c) [year] [fullname]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
