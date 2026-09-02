# Validation Notes

## StoreUserRequest
- Created StoreUserRequest using Artisan.
- Changed authorize() to return true.
- Added validation rules:
  - name: required|string|min:3
  - email: required|email
  - age: required|integer|min:18
- Updated store() to use StoreUserRequest.

## UpdateUserRequest
- Created UpdateUserRequest.
- Changed authorize() to return true.
- Added the same validation rules.
- Updated update() to use UpdateUserRequest.

## Testing
- Tested valid requests.
- Tested invalid requests in Postman.
- Validation errors were returned correctly.    
