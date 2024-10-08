- Basically a regular expression is a sequence of characters that forms a search pattern.
- When you search for data in a text, you can use this search pattern to describe what you are searching for.
# Terminology 
## What Regular Expressions Are Exactly
- Basically a regular expression is a patter describing a certain amount of text.
- (You will usually find the name abbreviated to "regex" or ""regexp")

### Temel Karakterler
 - - **`.`** - Herhangi bir karakter (yeni satır hariç)
- **`^`** - Satır başını ifade eder
- **`$`** - Satır sonunu ifade eder
- **`*`** - Önceki karakterin 0 veya daha fazla tekrarını ifade eder
- **`+`** - Önceki karakterin 1 veya daha fazla tekrarını ifade eder
- **`?`** - Önceki karakterin 0 veya 1 tekrarını ifade eder
- **`{n}`** - Önceki karakterin tam olarak n kez tekrarını ifade eder
- **`{n,}`** - Önceki karakterin en az n kez tekrarını ifade eder
- **`{n,m}`** - Önceki karakterin en az n, en fazla m kez tekrarını ifade eder

### Karakter Sınıfları

- **`\d`** - Herhangi bir rakam (`[0-9]`)
- **`\D`** - Rakam olmayan herhangi bir karakter (`[^0-9]`)
- **`\w`** - Herhangi bir alfanumerik karakter (`[a-zA-Z0-9_]`)
- **`\W`** - Alfanumerik olmayan herhangi bir karakter (`[^a-zA-Z0-9_]`)
- **`\s`** - Herhangi bir boşluk karakteri (`[ \t\n\r\f\v]`)
- **`\S`** - Boşluk olmayan herhangi bir karakter (`[^ \t\n\r\f\v]`)
