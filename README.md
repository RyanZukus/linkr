# Linkr
A coding exercise in link shortening

## Installation

TBD

## Challenges

TBD

## Reasoning and Design Considerations

### How to shorten links
Somewhat tautologically, the shortest way to represent the ***N***th entry in an arbitrarily-populated list \(of links, in this case\) is by using the number ***N***. Consequently, the standard-issue, auto-incrementing database ID was used as the starting point for this design. Base 10 integers are a good start, but we can go shorter by increasing the numerical base. PHP's built-in ```base_convert()``` function can handle numerical bases up to Base 36, *e.g.* the 26 letters of the alphabet plus the digits 0 through 9. We can go higher by manually defining our own base conversion function, up to the limits of the valid characters available to form a url. Some casual Googling indicates that Base 62 appears to be the commonly-accepted stopping point, which includes 26 uppercase letters, 26 lowercase letter, and 10 digits, though adding in some punctuation can push this slightly higher. I've chosen to stop at Base 64 for the sake of simplicity, as well as in the hopes that future database storage improvements might be able to leverage a direct translation from 6 bits of storage.

## Future Improvements

TBD