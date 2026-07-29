CREATE TABLE divisions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    bn_name VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE districts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    division_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    bn_name VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (division_id) REFERENCES divisions(id)
);

INSERT INTO divisions (id, name, bn_name) VALUES
(1,'Dhaka','ঢাকা'),
(2,'Chattogram','চট্টগ্রাম'),
(3,'Rajshahi','রাজশাহী'),
(4,'Khulna','খুলনা'),
(5,'Barishal','বরিশাল'),
(6,'Sylhet','সিলেট'),
(7,'Rangpur','রংপুর'),
(8,'Mymensingh','ময়মনসিংহ');


INSERT INTO districts (division_id, name, bn_name) VALUES

-- Dhaka
(1,'Dhaka','ঢাকা'),
(1,'Gazipur','গাজীপুর'),
(1,'Narayanganj','নারায়ণগঞ্জ'),
(1,'Manikganj','মানিকগঞ্জ'),
(1,'Munshiganj','মুন্সিগঞ্জ'),

-- Chattogram
(2,'Chattogram','চট্টগ্রাম'),
(2,'Cox''s Bazar','কক্সবাজার'),
(2,'Cumilla','কুমিল্লা'),
(2,'Feni','ফেনী'),
(2,'Noakhali','নোয়াখালী'),

-- Rajshahi
(3,'Rajshahi','রাজশাহী'),
(3,'Bogura','বগুড়া'),
(3,'Pabna','পাবনা'),
(3,'Naogaon','নওগাঁ'),
(3,'Natore','নাটোর'),

-- Khulna
(4,'Khulna','খুলনা'),
(4,'Jessore','যশোর'),
(4,'Satkhira','সাতক্ষীরা'),
(4,'Bagerhat','বাগেরহাট'),
(4,'Kushtia','কুষ্টিয়া'),

-- Barishal
(5,'Barishal','বরিশাল'),
(5,'Bhola','ভোলা'),
(5,'Patuakhali','পটুয়াখালী'),
(5,'Jhalokathi','ঝালকাঠি'),
(5,'Pirojpur','পিরোজপুর'),

-- Sylhet
(6,'Sylhet','সিলেট'),
(6,'Moulvibazar','মৌলভীবাজার'),
(6,'Habiganj','হবিগঞ্জ'),
(6,'Sunamganj','সুনামগঞ্জ'),

-- Rangpur
(7,'Rangpur','রংপুর'),
(7,'Dinajpur','দিনাজপুর'),
(7,'Kurigram','কুড়িগ্রাম'),
(7,'Lalmonirhat','লালমনিরহাট'),
(7,'Nilphamari','নীলফামারী'),

-- Mymensingh
(8,'Mymensingh','ময়মনসিংহ'),
(8,'Jamalpur','জামালপুর'),
(8,'Netrokona','নেত্রকোনা'),
(8,'Sherpur','শেরপুর');